<?php

require __DIR__ .'/../init.php';

$config = require __DIR__ . '/../config/config.php';

$router = \mvc\Router::getRouter();
$router->setConfig($config);
$router->run();
