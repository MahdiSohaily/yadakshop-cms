<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Request;
use App\Utilities\Url;

class LoginController
{
    public function index()
    {
        view('auth/login', ['page_title' => 'ورود به سیستم']);
    }

    public function validate(Request $request)
    {
        $username = sanitizeString($request->input('username'));
        $password = sanitizeString($request->input('password'));

        if (empty($username) || empty($password)) {
            return view('auth/login', [
                'page_title' => 'ورود به سیستم',
                'error' => '* نام کاربری یا رمز عبور نمی‌ تواند خالی باشد.',
            ]);
        }

        $user = new User($username);

        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['login_status'] = 'success';

            header('Location: ' . Url::route('dashboard'));
            exit();
        } else {
            $_SESSION['login_status'] = 'failed';
            $_SESSION['f_username'] = $username;
            $_SESSION['f_password'] = $password;

            header('Location:' . Url::route('login'));
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
        exit();
    }
}
