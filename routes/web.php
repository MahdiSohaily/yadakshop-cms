<?php

use App\Core\Routing\Route;
use App\Middlewares\Authenticate;
use App\Controllers\DashboardController;
use App\Controllers\LoginController;

// Landing page route
Route::get('/', [DashboardController::class, 'index'], [Authenticate::class]);

// Authentication routes
Route::get('/login', [LoginController::class, 'index'], [Authenticate::class]);
Route::post('/login/check', [LoginController::class, 'validate']);
Route::post('/logout', [LoginController::class, 'logout']);
