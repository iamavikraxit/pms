<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:manage_roles');
    }

    /**
     * Display the roles list.
     */
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search', ''));

        $roles = Role::search($search)
            ->latest()
            ->get();

        return view('pages.role.index', compact('roles', 'search'));
    }
}
