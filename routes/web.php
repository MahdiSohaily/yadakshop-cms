<?php

use App\Core\Routing\Route;
use App\Middlewares\Authenticate;

// Landing page route
Route::get('/', ['DashboardController', 'index'], [Authenticate::class]);

// Authentication routes
Route::get('/login', ['LoginController', 'index'], [Authenticate::class]);
Route::post('/login/check', ['LoginController', 'validate']);
Route::post('/logout', ['LoginController', 'logout']);

