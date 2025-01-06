<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

// Rute default
Route::get('/', function () {
    return redirect()->route('latihan.index');
});

// Rute CRUD untuk Latihan (Hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    Route::resource('latihan', LatihanController::class);
});

// Rute untuk Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Rute untuk Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Rute untuk Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
