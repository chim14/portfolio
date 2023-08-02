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
$routes->setDefaultController('DashboardController');
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
$routes->get('/', 'Admin\DashboardController::index');

//route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');
//route admin daftar product
$routes->get('list-product', 'Admin\ProductController::product');
// roude add product
$routes->post('list-product/add', 'Admin\ProductController::store');
// roude add product
$routes->post('list-product/ubah(:num)', 'Admin\ProductController::update/$1');
// roude add product
$routes->post('list-product/hapus/(:num)', 'Admin\ProductController::destroy/$1');
//route admin product category
$routes->get('category-product', 'Admin\ProductCategoryController::productcategory');
//route add product category
$routes->post('category-product/add', 'Admin\ProductCategoryController::store');
//route ubah product category
$routes->post('category-product/ubah/(:num)', 'Admin\ProductCategoryController::update/$1');
//route hapus product category
$routes->post('category-product/hapus/(:num)', 'Admin\ProductCategoryController::destroy/$1');
//route admin daftar customer
$routes->get('list-customer', 'Admin\CustomerController::customer');
//route admin daftar restaurant
$routes->get('list-restaurant', 'Admin\RestaurantController::restaurant');


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
