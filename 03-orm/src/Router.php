<?php

namespace App;

use App\Controller\ErrorController;

class Router
{
    private const array ROUTES = [
        '/' => 'App\\Controller\\ContactController::index',
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
