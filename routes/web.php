<?php

use Illuminate\Support\Facades\Route;

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

// Login route for handling form submissions
Route::post('/login', function () {
    return response()->json([
        'message' => 'Login route not yet implemented',
        'redirect' => '/dashboard'
    ], 401);
})->name('login');
