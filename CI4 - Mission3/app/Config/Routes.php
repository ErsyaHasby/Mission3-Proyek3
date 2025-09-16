<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default: arahkan ke login
$routes->get('/', 'Auth::index');

// Auth
$routes->get('/login', 'Auth::index');    // tampilkan form login
$routes->post('/login', 'Auth::login');   // proses login
$routes->get('/logout', 'Auth::logout');  // logout

// Student
$routes->group('student', ['filter' => 'auth:student'], function ($routes) {
    $routes->get('dashboard', 'Student::dashboard');
    $routes->get('courses', 'Student::courses');
    $routes->get('enroll/(:num)', 'Student::enroll/$1');
});

// Admin
$routes->group('admin', ['filter' => 'auth:admin'], function ($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('courses', 'Admin::courses');
    $routes->get('courses/create', 'Admin::createCourse');
    $routes->post('courses/store', 'Admin::storeCourse');
    $routes->get('courses/edit/(:num)', 'Admin::editCourse/$1');
    $routes->post('courses/update/(:num)', 'Admin::updateCourse/$1');
    $routes->get('courses/delete/(:num)', 'Admin::deleteCourse/$1');

    $routes->get('students', 'Admin::students');
    $routes->get('students/create', 'Admin::createStudent');
    $routes->post('students/store', 'Admin::storeStudent');
    $routes->get('students/edit/(:num)', 'Admin::editStudent/$1');
    $routes->post('students/update/(:num)', 'Admin::updateStudent/$1');
    $routes->get('students/delete/(:num)', 'Admin::deleteStudent/$1');
});

// Enrollment Management
$routes->get('/enrollment', 'Enrollment::index');
$routes->post('/enrollment/store', 'Enrollment::store');
$routes->get('/enrollment/delete/(:num)', 'Enrollment::delete/$1');

$routes->group('admin', function ($routes) {
    $routes->get('students', 'Admin\Students::index');
    $routes->get('students/create', 'Admin\Students::create');
    $routes->post('students/store', 'Admin\Students::store');
    $routes->get('students/edit/(:num)', 'Admin\Students::edit/$1');
    $routes->post('students/update/(:num)', 'Admin\Students::update/$1');
    $routes->get('students/delete/(:num)', 'Admin\Students::delete/$1');

    // ✅ route baru untuk detail mahasiswa
    $routes->get('students/detail/(:num)', 'Admin\Students::detail/$1');
});
