<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Permission;

class PermissionController extends Controller
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
     * Display the permissions list.
     */
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search', ''));

        $permissions = Permission::search($search)
            ->latest()
            ->get();

        return view('pages.permission.index', compact('permissions', 'search'));
    }
}
