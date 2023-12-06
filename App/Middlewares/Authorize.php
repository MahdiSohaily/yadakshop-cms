<?php

namespace App\Middlewares;

use App\Middlewares\Contracts\MiddlewareInterface;
use App\Models\User;

class Authorize implements MiddlewareInterface
{
    public function handle()
    {
        global $user;
        // Start the session (if not started already)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
            $user = new User($_SESSION['username']);
        } else {
            // User is not logged in
            // Redirect the user to the login page or perform other actions
            header('Location: /login');
            exit();
        }
    }
}
