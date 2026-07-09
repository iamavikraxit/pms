<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StaffTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * Test that guests are redirected to home (login).
     */
    public function test_guest_cannot_access_staff_page(): void
    {
        $response = $this->get('/staff');

        $response->assertRedirect('/');
    }

    /**
     * Test that unauthorized logged-in users cannot access staff page.
     */
    public function test_unauthorized_user_cannot_access_staff_page(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/staff');

        $response->assertStatus(403);
    }

    /**
     * Test that authorized logged-in users can view the staff page.
     */
    public function test_authorized_user_can_access_staff_page(): void
    {
        $user = User::factory()->create();
        $permission = Permission::where('short_name', 'manage_permissions')->first();
        $user->permissions()->attach($permission->id);

        $response = $this->actingAs($user)->get('/staff');

        $response->assertStatus(200);
        $response->assertSee('Staff');
        $response->assertSee('Management');
        $response->assertSee('Alice Photographer'); // from seed
    }

    /**
     * Test that staff permissions and roles can be updated.
     */
    public function test_authorized_user_can_update_staff_permissions_and_role(): void
    {
        $admin = User::factory()->create();
        $managePerm = Permission::where('short_name', 'manage_permissions')->first();
        $admin->permissions()->attach($managePerm->id);

        $targetUser = User::where('email', 'alice@example.com')->first();
        $this->assertNotNull($targetUser);

        // Find a role and permissions to assign
        $role = Role::where('name', 'Admin')->first();
        $permissions = Permission::whereIn('short_name', ['view_dashboard', 'manage_bookings'])->pluck('id')->toArray();

        $response = $this->actingAs($admin)->post(route('staff.permissions.update', $targetUser), [
            'role_id' => $role->id,
            'permissions' => $permissions,
        ]);

        $response->assertRedirect(route('staff'));
        $response->assertSessionHas('success');

        // Verify direct permissions in DB
        $targetUser->refresh();
        $this->assertTrue($targetUser->hasRole('Admin'));
        $this->assertTrue($targetUser->hasPermission('view_dashboard'));
        $this->assertTrue($targetUser->hasPermission('manage_bookings'));
        $this->assertFalse($targetUser->hasPermission('upload_photos')); // was original, should be removed by sync
    }
}
