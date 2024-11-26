<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/api/getFacturas', 'FacturaController::getAll');
$routes->post('/api/createFactura','FacturaController::create');
$routes->get('/api/getClientes', 'ClienteController::getAll');