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

        if (!method_exists($controller, $action)) {
            return new ErrorController()->notFound();
        }

        return new $controller()->$action();
    }
}