<?php

use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\DashboardController;
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
});
