<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/novia', 'Home::novia');
$routes->get('/reciclaje', 'Home::reciclaje');
$routes->get('/square', 'Home::square');
$routes->post('/envioForm', 'Contacto::send');
$routes->get('/Galeria/obtenerDetallesImagen/(:num)', 'Galeria::obtenerDetallesImagen/$1');
