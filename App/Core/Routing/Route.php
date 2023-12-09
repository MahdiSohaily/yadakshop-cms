<?php

namespace App\Core\Routing;

class Route
{
    private static $routes = [];
    private static $currentRoute; // To store the current route being defined

    public function add($method, $uri, $action = null, $name = null)
    {
        $method = is_array($method) ? $method : [$method];
        $route = [
            'method' => $method,
            'uri' => $uri,
            'action' => $action,
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

    public static function get($uri, $action)
    {
        self::$currentRoute = new self(); // Create a new instance for the current route
        self::$currentRoute->add('get', $uri, $action);
        return self::$currentRoute;
    }

    public static function post($uri, $action)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('post', $uri, $action);
        return self::$currentRoute;
    }

    public static function put($uri, $action, $name = null)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('put', $uri, $action, $name);
        return self::$currentRoute;
    }

    public static function patch($uri, $action, $name = null)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('patch', $uri, $action, $name);
        return self::$currentRoute;
    }

    public static function delete($uri, $action, $name = null)
    {
        self::$currentRoute = new self();
        self::$currentRoute->add('delete', $uri, $action, $name);
        return self::$currentRoute;
    }

    public function name($name)
    {
        // Set the name for the current route
        self::$routes[count(self::$routes) - 1]['name'] = $name;
        return $this; // Return the current route instance for further chaining
    }

    public function middleware($middlewares)
    {
        // Add the provided middleware or middlewares to the current route
        self::$routes[count(self::$routes) - 1]['middleware'] = array_merge(
            self::$routes[count(self::$routes) - 1]['middleware'] ?? [],
            (array)$middlewares
        );

        return $this; // Return the current route instance for further chaining
    }
}
