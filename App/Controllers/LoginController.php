<?php

namespace App\Controllers;

use App\Models\User;

class LoginController
{
    function login()
    {
        global $request;

        print_r($request->input('path'));
        $user = new User(1);
        print_r($user->name);
    }
}
