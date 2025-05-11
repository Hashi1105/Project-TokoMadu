<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'Auth::login');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/Admin', 'Admin::index'); // Buat controller Dashboard

$routes->get('/', 'Home::index');
$routes->get('/Kategori', 'Kategori::index');
$routes->get('/Produk', 'Produk::index');
$routes->get('/Penjualan', 'Penjualan::index');

// $routes->get('/barang', 'Barang::index');
// $routes->get('/barang/create', 'Barang::create');
// $routes->post('/barang/store', 'Barang::store');
// $routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
// $routes->post('/barang/update/(:num)', 'Barang::update/$1');
// $routes->get('/barang/delete/(:num)', 'Barang::delete/$1');


