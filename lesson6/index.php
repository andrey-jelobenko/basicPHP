<?php

$controller = $_REQUEST['controller'] ?? 'home';

$routes = require 'routes.php';

if (!isset($routes[$controller])) {
    $controller = '404';
}

require_once $routes[$controller];
