<?php

use App\Http\Controllers\Backend\AuthenticatedController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

// Redirect the login page to the home page when trying to access it forcefully, as the login form is a modal on the home page
Route::get('/login', function () {
    return redirect('/');
});

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/contacts', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/portfolios', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::post('/login', [AuthenticatedController::class, 'login'])->name('login');

Route::post('/logout', [AuthenticatedController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(RoleController::class)->group(function () {
        Route::get('/roles', 'index')->name('roles');
    });

    Route::controller(PermissionController::class)->group(function () {
        Route::get('/permissions', 'index')->name('permissions');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users');
        Route::post('/users/{user}/permissions', 'updatePermissions')->name('user.permissions.update');
    });
});

