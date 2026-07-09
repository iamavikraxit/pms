<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view_dashboard');
    }

    /**
     * Display the dashboard.
     */
    public function index(): View
    {
        return view('pages.dashboard');
    }
}
