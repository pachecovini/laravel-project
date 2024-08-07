<?php

use App\Http\Controllers\LoginController;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('contact', function () {
    return view('contact');
});

Route::get('users', function () {
    return view('users');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
