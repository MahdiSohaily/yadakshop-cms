<?php

namespace App\Core\Routing;

use App\Core\Request;

class Router
{
    private $request;
    private $routes;
    private $currentRoute;

    public function __construct()
    {
        $this->request = new Request;
        $this->routes = Route::routes();
        $this->currentRoute = $this->findRoute($this->request) ?? null;
    }

    public function findRoute(Request $request)
    {
        foreach ($this->routes as $route) {
            if (!in_array($request->getMethod(), $route['method'])) {
                continue;
            }

            if ($this->regexMatched($route)) {
                return $route;
            }
        }

        return null;
    }

    public function regexMatched($route)
    {
        $pattern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route['uri']) . "$|\/$/";
        $result = preg_match($pattern, $this->request->getUri(), $matches);

        if (!$result) {
            return false;
        }

        foreach ($matches as $key => $value) {
            if (!is_int($key)) {
                $this->request->setParams($key, $value);
            }
        }

        return true;
    }

    public function runMiddleware(array $route)
    {
        $middlewares = $route['middleware'] ?? [];

        foreach ($middlewares as $middlewareClass) {
            $middleware = new $middlewareClass();
            if (!$middleware->handle()) {
                return false;
            }
        }

        return true;
    }

    public function run()
    {
        if (is_null($this->currentRoute)) {
            $this->dispatch404();
        }

        if ($this->invalidRequest($this->request)) {
            $this->dispatch405();
            die("Invalid request");
        }

        if (!$this->runMiddleware($this->currentRoute)) {
            $this->dispatch405();
            die("Invalid request");
        }

        $this->dispatch($this->currentRoute);
    }

    private function invalidRequest(Request $request)
    {
        foreach ($this->routes as $route) {
            if ($request->getUri() == $route['uri']) {
                return !in_array($request->getMethod(), $route['method']);
            }
        }

        return true;
    }

    private function dispatch405()
    {
        header("HTTP/1.1 405 Method Not Allowed");
        view("errors.405");
        die();
    }

    private function dispatch404()
    {
        header("HTTP/1.1 404 Not Found");
        view("errors.404", [
            'page_title' => '404',
        ]);
        die();
    }

    private function dispatch(array $route)
    {
        $action = $route["action"];

        if (is_null($action) || empty($action)) {
            return false;
        }

        if (is_callable($action)) {
            $action();
        }

        if (is_string($action) || is_array($action)) {
            list($controller, $method) = $this->parseAction($action);
            $this->passRequest($controller, $method);
        }
    }

    private function parseAction($action)
    {
        if (is_string($action)) {
            return explode("@", $action);
        }

        if (is_array($action)) {
            return $action;
        }

        throw new \Exception("Invalid action format");
    }

    private function passRequest(string $controller, string $method)
    {
        if (!class_exists($controller)) {
            throw new \Exception("class $controller does not exist");
        }

        $controllerObject = new $controller();

        if (!method_exists($controllerObject, $method)) {
            throw new \Exception("method $method does not exist");
        }

        $controllerObject->$method($this->request);
    }
}
