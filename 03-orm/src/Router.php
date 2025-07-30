<?php

namespace App;

use App\Controller\ErrorController;

class Router
{
    private const array ROUTES = [
        '/' => 'App\\Controller\\ContactController::index',
        '/new' => 'App\\Controller\\ContactController::new',
        // Affiche le contact selon l'id passé dans la query string
        '/show' => 'App\\Controller\\ContactController::show',
    ];

    public function executeRoute(string $path): string
    {
        $callback = self::ROUTES[$path];
        [$controller, $action] = explode('::', $callback);

        if (!method_exists($controller, $action)) {
            return new ErrorController()->notFound();
        }

        return new $controller()->$action();
    }
}
