<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route Awal
$routes->get('/', 'Home::index', ['filter' => 'roleRedirect']);

$routes->get('/user/profile', 'Profile::index', ['filter' => 'role:user']);
$routes->post('/user/update', 'Profile::updateUser', ['filter' => 'role:user']);
$routes->get('/user/history', 'Profile::history', ['filter' => 'role:user']);
$routes->get('/user/terms', 'Profile::terms', ['filter' => 'role:user']);
$routes->get('/user/report', 'Profile::report', ['filter' => 'role:user']);
$routes->post('/user/createReport', 'Profile::createReport', ['filter' => 'role:user']);


// Route User
$routes->get('/user', 'User::index', ['filter' => 'role:user']);
$routes->post('/user', 'User::index', ['filter' => 'role:user']);
$routes->get('/user/(:segment)', 'User::detail/$1', ['filter' => 'role:user']);
$routes->get('/user/(:segment)/order', 'Order::index/$1', ['filter' => 'role:user']);
$routes->post('/user/(:segment)/order', 'Order::saveOrder/$1', ['filter' => 'role:user']);
$routes->get('/user/order/payment', 'Payment::index', ['filter' => 'role:user']);
$routes->get('/user/order/payment/(:num)', 'Payment::index/$1', ['filter' => 'role:user']);
$routes->post('/user/order/payment/process', 'Payment::processPayment', ['filter' => 'role:user']);
$routes->get('/user/order/payment/success/(:segment)', 'Payment::success/$1');

// Route Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/profile', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/kost', 'Admin::kost', ['filter' => 'role:admin']);
$routes->get('/admin/create', 'Admin::create', ['filter' => 'role:admin']);
$routes->post('/admin/save', 'Admin::save', ['filter' => 'role:admin']);
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1', ['filter' => 'role:admin']);
$routes->post('/admin/update/(:num)', 'Admin::update/$1', ['filter' => 'role:admin']);
$routes->get('/admin/report', 'Admin::report', ['filter' => 'role:admin']);
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);
