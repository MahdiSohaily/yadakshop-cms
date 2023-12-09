<?php

namespace App\Core\Routing;

class Route
{
    private static $routes = [];
    private static $currentRoute; // To store the current route being defined

    public function add($method, $uri, $action = null, $middleware = [], $name = null)
    {
        $method = is_array($method) ? $method : [$method];
        $route = [
            'method' => $method,
            'uri' => $uri,
            'action' => $action,
            'middleware' => $middleware,
        ];

        if ($name !== null) {
            $route['name'] = $name;
        }

        array_push(self::$routes, $route);

        // Return the current route instance for chaining
        return $this;
    }

    public static function routes()
    {
        return self::$routes;
    }

    public static function get($uri, $action, $middleware = [])
    {
        self::$currentRoute = new self(); // Create a new instance for the current route
        self::$currentRoute->add('get', $uri, $action, $middleware);
        return self::$currentRoute;
    }

    public static function post($uri, $action, $middleware = [])
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('post', $uri, $action, $middleware);
        return self::$currentRoute;
    }

    public static function put($uri, $action, $middleware = [], $name = null)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('put', $uri, $action, $middleware, $name);
        return self::$currentRoute;
    }

    public static function patch($uri, $action, $middleware = [], $name = null)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('patch', $uri, $action, $middleware, $name);
        return self::$currentRoute;
    }

    public static function delete($uri, $action, $middleware = [], $name = null)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('delete', $uri, $action, $middleware, $name);
        return self::$currentRoute;
    }


    public function name($name)
    {
        // Set the name for the current route
        self::$routes[count(self::$routes) - 1]['name'] = $name;
        return $this; // Return the current route instance for further chaining
    }
}
