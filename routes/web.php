<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('show.login');
    Route::get('/register', [RegisterController::class, 'show'])->name('show.register');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', LogoutController::class)->name('logout');

    Route::prefix('profile')
        ->name('profile.')
        ->group(function () {
        Route::get('', [\App\Http\Controllers\Profile\IndexController::class, 'index'])->name('index');
    });
});
