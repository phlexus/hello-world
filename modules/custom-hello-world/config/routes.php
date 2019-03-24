<?php declare(strict_types=1);

use Phalcon\Mvc\Router\Group as RouterGroup;

$routes = new RouterGroup([
    'module' => 'CustomHelloWorld',
    'controller' => 'IndexController',
    'action' => 'index',
    'namespace' => 'MyApp\Modules\CustomHelloWorld\Controllers',
]);

$routes->add('/custom-hello-world', [
    'controller' => 1,
    'action' => 2,
]);

return $routes;
