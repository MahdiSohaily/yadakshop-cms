<?php

namespace App\Middlewares;

use App\Middlewares\Contracts\MiddlewareInterface;
use App\Models\User;

class Authenticate implements MiddlewareInterface
{
   
    public function handle()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // Check if the user is logged in
        if (!isset($_SESSION['user_id'])) {
            $currentRoute = $_SERVER['REQUEST_URI'];
            $loginRoute = '/login'; // Adjust this based on your actual login route

            // Redirect to the login page if not already there
            if ($currentRoute !== $loginRoute) {
                header('Location: ' . $loginRoute);
                exit();
            }
        } else {
            // Optionally, you can remove this line if the User instance is not needed
            $this->user = new User($_SESSION['username']);

            // Check if the current route is the login route
            $currentRoute = $_SERVER['REQUEST_URI'];
            $loginRoute = '/login'; // Adjust this based on your actual login route

            // Redirect to the home page if trying to access the login page
            if ($currentRoute == $loginRoute) {
                header('Location: /');
                exit();
            }
        }
    }
}
