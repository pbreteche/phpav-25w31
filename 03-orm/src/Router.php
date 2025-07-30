<?php

namespace App;

class Router
{
    private const array ROUTES = [
        '/' => 'App\\ContactController::index',
    ];

    public function executeRoute($REQUEST_URI): string
    {
        $callback = self::ROUTES[$REQUEST_URI];
        [$controller, $action] = explode('::', $callback);

        return new $controller()->$action();
    }
}