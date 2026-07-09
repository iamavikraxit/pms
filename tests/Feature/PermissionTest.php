<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PermissionTest extends TestCase
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
    public function test_guest_cannot_access_permissions_page(): void
    {
        $response = $this->get('/permissions');

        $response->assertRedirect('/');
    }

    /**
     * Test that logged-in users can view the permissions page.
     */
    public function test_authenticated_user_can_access_permissions_page(): void
    {
        $user = User::factory()->create();
        $permission = Permission::where('short_name', 'manage_permissions')->first();
        $user->permissions()->attach($permission->id);

        $response = $this->actingAs($user)->get('/permissions');

        $response->assertStatus(200);
        $response->assertSee('Permission');
        $response->assertSee('List');
        $response->assertSee('View Dashboard');
        $response->assertSee('Manage Roles');
    }

    /**
     * Test that permission search works correctly.
     */
    public function test_permission_search_filters_results(): void
    {
        $user = User::factory()->create();
        $permission = Permission::where('short_name', 'manage_permissions')->first();
        $user->permissions()->attach($permission->id);

        // Search for "Financials" which matches "View Financials"
        $response = $this->actingAs($user)->get('/permissions?search=Financials');

        $response->assertStatus(200);
        $response->assertSee('View Financials');
        $response->assertDontSee('Manage Roles');
    }

    /**
     * Test that user without permission gets 403.
     */
    public function test_unauthorized_user_is_forbidden(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/permissions');

        $response->assertStatus(403);
        $response->assertSee('Access Forbidden');
    }
}
