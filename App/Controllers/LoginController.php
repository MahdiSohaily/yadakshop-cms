<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\request;

class LoginController
{
    function index()
    {
        view('auth/login', ['page_title' => 'ورود به سیستم']);
    }

    function validate(Request $request)
    {
        view('auth/login', [
            'page_title' => 'ورود به سیستم',
            'error' => '* نام کاربری یا رمز عبور وارد شده اشتباه می باشد .'
        ]);
    }
}
