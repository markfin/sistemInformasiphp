<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/guru', 'Home::guru');
$routes->get('/murid', 'Home::murid');