<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
// ->middleware('auth');
Route::get('/dashboard', function () {return view('dashboard');})->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/profile', [LoginController::class, 'showProfileForm'])->name('profile');
Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'GoogleCallback']);
// Route::get('/dashboard', [LoginController::class, 'showDashboardForm'])->name('dashboard')->middleware('auth');
// Auth::routes();
