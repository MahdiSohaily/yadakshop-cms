<?php

namespace App\Middlewares;

use App\Core\Auth\Auth;
use App\Middlewares\Contracts\MiddlewareInterface;

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
            $this->redirect(site_url());
        }

        // Check if the user is logged in and trying to access the login route
        if (Auth::check() && $currentRoute == $loginRoute) {
            $this->redirect('/');
        }
    }

    private function redirect($location)
    {
        header('Location: ' . $location);
        exit();
    }
}
