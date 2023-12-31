<?php

namespace App\Core;

class Request
{
    private $params;
    private $route_params;
    private $method;
    private $uri;
    private $agent;
    private $ip;
    protected $attributes = [];

    function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = strtolower($_SERVER["REQUEST_METHOD"]);
        $this->uri = $_SERVER["REQUEST_URI"];
        $this->agent = $_SERVER["HTTP_USER_AGENT"];
        $this->ip = $_SERVER["REMOTE_ADDR"];
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams($key, $value = null)
    {
        $this->route_params[$key] = $value;
    }

    public function getRouteParams(): array
    {
        return $this->route_params;
    }

    public function getRouteParam($key): string
    {
        return $this->route_params[$key];
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->uri;
    }

    public function getAgent(): string
    {
        return $this->agent;
    }

    public function getIp(): string
    {
        return $this->ip;
    }
    public function getUri(): string
    {
        return $this->uri;
    }

    function input($key)
    {
        if (empty($key)) {
            return null;
        }

        return $this->params[$key];
    }
}
