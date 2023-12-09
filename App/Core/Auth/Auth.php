<?php

namespace App\Core\Auth\Auth;

use App\Models\User;

class Auth
{
    public static function user()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // Check if the user is authenticated
        if (isset($_SESSION['user_id'])) {
            // Fetch user information from the database based on the user_id
            $user = new User($_SESSION['user_id']);
            return $user;
        }

        return null;
    }

    public static function check()
    {
        return self::user() !== null;
    }
}
