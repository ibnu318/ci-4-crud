<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/detail/(:num)', 'Home::show/$1');

$routes->presenter('projects', ['controller' => 'Project']);

