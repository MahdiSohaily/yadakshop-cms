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
        if (isset($_SESSION['user_idw'])) {
            $user = new User($_SESSION['username']);
        } else {
            // Check if the current route is the login route
            $currentRoute = $_SERVER['REQUEST_URI'];
            $loginRoute = '/login'; // Adjust this based on your actual login route

            if ($currentRoute !== $loginRoute) {
                // User is not logged in and not on the login page
                // Redirect the user to the login page or perform other actions
                header('Location: /login');
                exit();
            }
        }
    }
}
