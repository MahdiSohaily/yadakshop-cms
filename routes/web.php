<?php

use App\Core\Routing\Route;
use App\Middlewares\Authenticate;
use App\Middlewares\Authorize;
use App\Controllers\DashboardController;
use App\Controllers\LoginController;

// Landing page route
Route::get('/', [DashboardController::class, 'index'])
    ->middleware([
        Authenticate::class,
        Authorize::class,
    ])
    ->name('dashboard');

// Authentication routes
Route::get('/login', [LoginController::class, 'index'])->middleware(Authenticate::class)->name('login');
Route::post('/login/check', [LoginController::class, 'validate'])->name('login.check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
