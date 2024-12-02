<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route Awal
$routes->get('/', 'Home::index', ['filter' => 'roleRedirect']);

// Route User
$routes->get('/user', 'User::index', ['filter' => 'role:user']);
$routes->get('/user/(:segment)', 'User::detail/$1', ['filter' => 'role:user']);
$routes->get('/user/(:segment)/order', 'Order::index/$1', ['filter' => 'role:user']);
$routes->post('/user/(:segment)/order', 'Order::saveOrder/$1', ['filter' => 'role:user']);
$routes->get('/user/order/payment', 'Payment::index', ['filter' => 'role:user']);
$routes->get('/user/order/payment/(:num)', 'Payment::index/$1', ['filter' => 'role:user']);
$routes->post('/user/order/payment/process', 'Payment::processPayment', ['filter' => 'role:user']);
$routes->get('/user/order/payment/success/(:segment)', 'Payment::success/$1');

// Route Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);