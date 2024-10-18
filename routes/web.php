<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/dashboard', [LoginController::class, 'showDashboardForm'])->name('dashboard');
Route::get('/profile', [LoginController::class, 'showProfileForm'])->name('profile');
// Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Auth::routes();

