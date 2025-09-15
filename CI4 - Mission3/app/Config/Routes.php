<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('mahasiswa', 'mahasiswa::index');
$routes->get('mahasiswa/detail/(:num)', 'mahasiswa::detail/$1');

