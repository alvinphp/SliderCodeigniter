<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/slider', 'Image::index');
$routes->get('/config', 'ConfigSlider::index');
