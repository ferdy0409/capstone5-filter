<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// Auth Routes
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');
$routes->get('keranjang', 'KeranjangController::index');

// Menu Routes
$routes->get('produk', 'ProdukController::index');
$routes->get('keranjang', 'TransaksiController::index');