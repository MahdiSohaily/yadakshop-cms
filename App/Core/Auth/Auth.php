<?php

namespace App\Core\Auth;

use App\Models\User;

class Auth
{
    public static function user()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // Check if the user is authenticated
        if (isset($_SESSION['username'])) {
            // Fetch user information from the database based on the user_id
            $user = new User($_SESSION['username']);
            return $user->getAttributes();
        }

        return null;
    }

    public static function check()
    {
        return self::user() !== null;
    }
}
