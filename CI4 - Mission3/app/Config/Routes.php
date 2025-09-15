<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('mahasiswa', 'mahasiswa::index');
$routes->get('mahasiswa/detail/(:num)', 'mahasiswa::detail/$1');
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('student/dashboard', 'Student::dashboard');
$routes->get('admin/dashboard', 'Admin::dashboard');

