<?php

use CodeIgniter\Router\RouteCollection;

// API
$routes->get('/', 'Home::index');
$routes->get('/api/getFacturas', 'FacturaController::getAll');
$routes->post('/api/createFactura','FacturaController::create');
$routes->get('/api/getClientes', 'ClienteController::getAll');

// Web
$routes->get('factura/(:num)', 'FacturaController::show/$1');