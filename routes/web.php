<?php

// use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('contact', function () {
    return view('contact');
});
Route::get('users', function () {
    return view('users');
});

Auth::routes();

//Login routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//create users route
Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
Route::post('/create-user', [UserController::class, 'store'])->name('store-user');

//home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
