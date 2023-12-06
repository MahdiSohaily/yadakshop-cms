<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Request;

class LoginController
{
    public function index()
    {
        view('auth/login', ['page_title' => 'ورود به سیستم']);
    }

    public function validate(Request $request)
    {
        $username = sanitizeString($request->input('username'));
        $password = trim(($request->input('password')));

        if (empty($username) || empty($password)) {
            return view('auth/login', [
                'page_title' => 'ورود به سیستم',
                'error' => '* نام کاربری یا رمز عبور نمی‌ تواند خالی باشد.'
            ]);
        }

        $user = new User($username);

        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->username;
            
            return view('auth/login', [
                'page_title' => 'ورود به سیستم',
                'error' => 'ورود موفقیت‌آمیز بود!'
            ]);
        } else {
            return view('auth/login', [
                'page_title' => 'ورود به سیستم',
                'error' => '* نام کاربری یا رمز عبور اشتباه می‌باشد.'
            ]);
        }
    }
}
