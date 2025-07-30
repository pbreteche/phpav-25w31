<?php

use App\Router;

require __DIR__.'/../vendor/autoload.php';

$router = new Router();
echo $router->executeRoute($_SERVER['REQUEST_URI']);
