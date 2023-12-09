<?php
// RouteManager.php

namespace App\Core\Routing;

class RouteManager
{
    private static $namedRoutes = [];

    public static function name($name, $uri)
    {
        self::$namedRoutes[$name] = $uri;
    }

    public static function getRouteUri($name)
    {
        return self::$namedRoutes[$name] ?? null;
    }
}
