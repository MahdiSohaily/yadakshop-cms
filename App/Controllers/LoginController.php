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
        global $user;
        $username = sanitizeString($request->input('username'));
        $password = trim(($request->input('password')));

        if (empty($username) || empty($password)) {
            return view('auth/login', [
                'page_title' => 'ورود به سیستم',
                'error' => '* نام کاربری یا رمز عبور نمی‌ تواند خالی باشد.'
            ]);
        }

        $fetched_user = new User($username);

        if ($fetched_user && password_verify($password, $fetched_user->password)) {
            $_SESSION['user_id'] = $fetched_user->id;
            $_SESSION['username'] = $fetched_user->username;
            $user = $fetched_user;
            $user->isLogin = true;

            header('Location: /');
        } else {
            return view('auth/login', [
                'page_title' => 'ورود به سیستم',
                'error' => '* نام کاربری یا رمز عبور اشتباه می‌باشد.'
            ]);
        }
    }

    function logout()
    {
        session_destroy();
        header('Location: /login');
    }
}
