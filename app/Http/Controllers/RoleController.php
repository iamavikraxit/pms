<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Display the roles list.
     */
    public function index(): View
    {
        return view('pages.role.index');
    }
}
