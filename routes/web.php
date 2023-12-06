<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFirefox;

Route::get('/', function () {
}, [BlockFirefox::class]);


Route::get('/login', ['LoginController', 'index']);

Route::post('/login/check', ['LoginController', 'validate']);


Route::add(['get'], '/home', function () {
    view('auth/login');
});

Route::get('/post/{slug}', ['ProductsController', 'post']);

Route::post('/create', null);

Route::get('/about', function () {
    echo 'welcome to the About Page';
});

Route::get('/products', 'ProductsController@show', [BlockFirefox::class]);

Route::get('/post/{slug}/comment/{id}', ['ProductsController', 'post']);
