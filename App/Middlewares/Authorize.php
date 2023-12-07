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
        if (!isset($_SESSION['user_id'])) {

            $currentRoute = $_SERVER['REQUEST_URI'];
            $loginRoute = '/login'; // Adjust this based on your actual login route
            if ($currentRoute !== $loginRoute) {
                header('Location: /login');
                exit();
            }
        } else {
            $user = new User($_SESSION['username']);
            // Check if the current route is the login route
            $currentRoute = $_SERVER['REQUEST_URI'];
            $loginRoute = '/login'; // Adjust this based on your actual login route

            if ($currentRoute == $loginRoute) {
                header('Location: /');
                exit();
            }
        }
    }
}
