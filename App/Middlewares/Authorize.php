<?php

namespace App\Middlewares;

use App\Middlewares\Contracts\MiddlewareInterface;

class Authorize implements MiddlewareInterface
{
    public function handle()
    {
        // Start the session (if not started already)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Check if the user is logged in
        if (isset($_SESSION['ss'])) {
            // User is logged in
            global $user;
            // You can access user information using $_SESSION['user_id'] or load the user from a database
            // Example: $user = User::find($_SESSION['user_id']);

            // Proceed with the middleware logic or redirect if needed

        } else {
            // User is not logged in
            // Redirect the user to the login page or perform other actions
            header('Location: /dsd');
            exit();
        }
    }
}
