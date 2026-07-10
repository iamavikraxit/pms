<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:manage_permissions');
    }

    /**
     * Display the staff list.
     */
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search', ''));

        $users = User::with(['roles', 'permissions'])
            ->when($search !== '', function ($query) use ($search) {
                $term = '%' . mb_strtolower($search, 'UTF-8') . '%';
                $query->whereRaw('LOWER(name) LIKE ?', [$term])
                      ->orWhereRaw('LOWER(email) LIKE ?', [$term]);
            })
            ->latest()
            ->get();

        $roles = Role::all();
        $permissions = Permission::all();

        return view('pages.user.index', compact('users', 'roles', 'permissions', 'search'));
    }

    /**
     * Update the staff member's role and direct permissions.
     */
    public function updatePermissions(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        // Sync role (for fetch and show)
        $user->roles()->sync([$request->role_id]);

        // Sync direct permissions
        $permissions = $request->input('permissions', []);
        $user->permissions()->sync($permissions);

        return redirect()->route('users')->with('success', 'Staff permissions updated successfully.');
    }
}
