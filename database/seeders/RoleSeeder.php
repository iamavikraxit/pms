<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Super Admin',
            'short_name' => NULL,
        ]);

        Role::create([
            'name' => 'Admin',
            'short_name' => NULL,
        ]);

        Role::create([
            'name' => 'Client',
            'short_name' => NULL,
        ]);
    }
}
