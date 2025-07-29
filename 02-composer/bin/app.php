#!/usr/bin/php
<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

// Autoloader de composer.
// Prend en charge plusieurs manières de charger les définitions sans avoir à faire explicitement des include ou require.
require __DIR__ . '/../vendor/autoload.php';

$logger = new Logger('logger');
$logger->pushHandler(new StreamHandler('php://stdout', Level::Debug));

$logger->info('This is a info message.', ['file' => __FILE__, 'line' => __LINE__]);
