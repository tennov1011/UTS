<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Auth::routes();

