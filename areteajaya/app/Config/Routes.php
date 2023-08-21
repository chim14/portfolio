<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
//route admin daftar customer
$routes->get('customer', 'Customer::customer');
// roude add product
$routes->post('customer/add', 'Customer::store');
// roude add product
$routes->put('customer/update/(:num)', 'Customer::update/$1');
// roude add product
$routes->delete('customer/hapus/(:num)', 'Customer::destroy/$1');
//
$routes->get('kategori', 'Kategori::kategori');
//route add product category
$routes->post('kategori/add', 'Kategori::store');
//route ubah product category
$routes->put('kategori/ubah/(:num)', 'Kategori::update/$1');
//route hapus product category
$routes->delete('kategori/hapus/(:num)', 'Kategori::destroy/$1');
//
$routes->get('produk', 'Produk::produk');
// roude add product
$routes->post('produk/add', 'Produk::store');
// roude add product
$routes->put('produk/ubah/(:num)', 'Produk::update/$1');
// roude add product
$routes->delete('produk/hapus/(:num)', 'Produk::destroy/$1');
//route admin daftar product
$routes->get('pengeluaran', 'pengeluaran::pengeluaran');
// roude add product
$routes->post('pengeluaran/add', 'pengeluaran::store');
// roude add product
$routes->put('pengeluaran/ubah/(:num)', 'pengeluaran::update/$1');
// roude add product
$routes->delete('pengeluaran/hapus/(:num)', 'pengeluaran::destroy/$1');
//
$routes->get('pemesanan', 'Pemesanan::pemesanan');
// roude add product
$routes->post('pemesanan/add', 'Pemesanan::store');
// roude add product
$routes->put('pemesanan/update/(:num)', 'Pemesanan::update/$1');
// roude add product
$routes->delete('pemesanan/hapus/(:num)', 'Pemesanan::destroy/$1');
//
$routes->get('pendapatan', 'Pendapatan::pendapatan'); //only pendapatan
// roude add product
$routes->post('pemesanan/add', 'Pendapatan::store');
// roude add product
$routes->delete('pemesanan/hapus/(:num)', 'Pendapatan::destroy/$1');
//route admin daftar product
$routes->get('pengeluaran', 'Pengeluaran::pengeluaran');
// roude add product
$routes->post('pengeluaran/add', 'Pengeluaran::store');
// roude add product
$routes->put('pengeluaran/ubah/(:num)', 'Pengeluaran::update/$1');
// roude add product
$routes->delete('pengeluaran/hapus/(:num)', 'Pengeluaran::destroy/$1');

$routes->get('/user', 'User::index');
// $routes->get('home/user', 'Home::user');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
