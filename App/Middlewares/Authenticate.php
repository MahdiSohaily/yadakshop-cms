<?php

namespace App\Middlewares;

use App\Core\Auth\Auth;
use App\Middlewares\Contracts\MiddlewareInterface;
use App\Utilities\Url;

class Authenticate implements MiddlewareInterface
{
    public function handle()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $currentRoute = $_SERVER['REQUEST_URI'];
        $loginRoute = '/login'; // Adjust this based on your actual login route

        // Check if the user is not logged in and not on the login route
        if (!Auth::check() && $currentRoute !== $loginRoute) {
            $this->redirect(Url::route('login'));
            return false; // Indicate that the middleware processing was not successful
        }

        // Check if the user is logged in and trying to access the login route
        if (Auth::check() && $currentRoute == $loginRoute) {
            $this->redirect(Url::route('dashboard'));
            return false; // Indicate that the middleware processing was not successful
        }

        return true; // Indicate that the middleware processing was successful
    }

    private function redirect($location)
    {
        header('Location: ' . $location);
        exit();
    }
}
