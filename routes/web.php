<?php

use App\Core\Routing\Route;
use App\Middlewares\Authorize;

// Landing page route
Route::get('/', ['DashboardController', 'index'], [Authorize::class]);

// Authentication routes
Route::get('/login', ['LoginController', 'index'], [Authorize::class]);
Route::post('/login/check', ['LoginController', 'validate'], [Authorize::class]);
