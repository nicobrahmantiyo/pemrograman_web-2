<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('patient', 'Patient::index');
$routes->get('patient/create', 'Patient::create');
$routes->post('patient/store', 'Patient::store');
$routes->get('patient/edit/(:num)', 'Patient::edit/$1');
$routes->post('patient/update/(:num)', 'Patient::update/$1');
$routes->get('patient/delete/(:num)', 'Patient::delete/$1');