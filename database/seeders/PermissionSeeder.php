<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Define default permissions
        $permissionsData = [
            [
                'name' => 'View Dashboard',
                'short_name' => 'view_dashboard',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Manage Roles',
                'short_name' => 'manage_roles',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Manage Permissions',
                'short_name' => 'manage_permissions',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Manage Bookings',
                'short_name' => 'manage_bookings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Upload Photos',
                'short_name' => 'upload_photos',
                'guard_name' => 'web',
            ],
            [
                'name' => 'View Financials',
                'short_name' => 'view_financials',
                'guard_name' => 'web',
            ],
        ];

        $permissions = [];
        foreach ($permissionsData as $data) {
            $permissions[$data['short_name']] = Permission::firstOrCreate(['short_name' => $data['short_name']], $data);
        }

        // 2. Fetch roles
        $superAdmin = Role::where('name', 'Super Admin')->first();
        $admin = Role::where('name', 'Admin')->first();
        $photographer = Role::where('name', 'Photographer')->first();
        $client = Role::where('name', 'Client')->first();

        // 4. Attach direct permissions to users (populating model_has_permissions table)
        $alice = User::where('email', 'alice@example.com')->first();
        $bob = User::where('email', 'bob@example.com')->first();
        $charlie = User::where('email', 'charlie@example.com')->first();

        if ($alice) {
            $alice->permissions()->sync([
                $permissions['view_dashboard']->id,
                $permissions['upload_photos']->id,
            ]);
        }

        if ($bob) {
            $bob->permissions()->sync([
                $permissions['view_dashboard']->id,
                $permissions['manage_bookings']->id,
            ]);
        }

        if ($charlie) {
            $charlie->permissions()->sync([
                $permissions['view_dashboard']->id,
            ]);
        }

        // 5. Assign roles to users (populating model_has_roles table)
        if ($alice && $photographer) {
            $alice->roles()->sync([$photographer->id]);
        }

        if ($bob && $admin) {
            $bob->roles()->sync([$admin->id]);
        }

        if ($charlie && $client) {
            $charlie->roles()->sync([$client->id]);
        }

        // 6. Create and assign Super Admin user
        $superAdminUser = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => 'password', // User model handles hashing via casts or UserFactory
            ]
        );
        if ($superAdminUser && $superAdmin) {
            $superAdminUser->roles()->sync([$superAdmin->id]);
            $superAdminUser->permissions()->sync(array_column($permissions, 'id'));
        }
    }
}
