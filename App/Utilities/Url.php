<?php

namespace App\Utilities;

use App\Core\Routing\Route;

class Url
{
    public  static function current(): string
    {
        return (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public static function query_params(): array
    {
        $query = [];

        $parts = parse_url(self::current());

        if (isset($parts['query'])) {
            parse_str($parts['query'], $query);
        }

        return $query;
    }

    public static function current_route(): string
    {
        return strtok($_SERVER['REQUEST_URI'], '?');
    }
    // In a utility or helper function

    public static function route($routeName, $parameters = [])
    {
        $routes = Route::routes();

        foreach ($routes as $route) {
            if (isset($route['name']) && $route['name'] === $routeName) {
                // Found the named route, construct the URL
                $url = $route['uri'];

                // Append any provided parameters to the URL (for routes with parameters)
                if (!empty($parameters)) {
                    $url .= '?' . http_build_query($parameters);
                }

                return $url;
            }
        }

        // Named route not found, return the current route as a fallback
        return self::current_route();
    }
}
