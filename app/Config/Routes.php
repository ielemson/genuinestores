<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// COMMON ROUTES
// $routes->get('/', 'Home::index');
$routes->get('/', 'HomeController::index');




$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
	// Registration
	$routes->get('register', 'Auth\AuthController::getRegister',['as'=>'register']);
    $routes->post('create-account', 'Auth\AuthController::attemptRegister');

	// Activation
	// $routes->get('activate-account', 'Auth\RegistrationController::activateAccount', ['as' => 'activate-account']);

	// Login-out
    $routes->get('login', 'Auth\AuthController::getLogin',['as'=>'login']);
	// Admin Login Route
    $routes->get('admin/login', 'Auth\AuthController::getAdminLogin');
    $routes->post('admin/login', 'Auth\AuthController::attemptAdminLogin');
    $routes->post('login', 'Auth\AuthController::attemptLogin');
	// $routes->post('login', 'Auth\LoginController::attemptLogin');
    $routes->get('logout', 'Auth\AuthController::logout');




});
$routes->group('admin', ['namespace' => 'App\Controllers\Admin',"filter" => "auth"], function($routes) {

	// ADMIN DASHBOARD
	$routes->get('dashboard', 'AdminController::dashboard',['as'=>'dashboard']);

	// PRODUCT ROUTE
	$routes->get('dashboard/product/create', 'ProductController::createProduct');
	$routes->get('dashboard/products', 'ProductController::products');
	$routes->post('dashboard/product', 'ProductController::store');
	$routes->get('dashboard/product/edit/(:num)', 'ProductController::edit/$1');

	// CATEGRY ROUTE
	$routes->get('dashboard/category/create', 'CategoryController::createCategory');
	$routes->get('dashboard/category/edit/(:num)', 'CategoryController::edit/$1');
	$routes->get('dashboard/categories', 'CategoryController::categories');
	$routes->post('dashboard/category', 'CategoryController::storeCategory');
	
  });


$routes->group('', ['namespace' => 'App\Controllers\Web'], function($routes) {

	$routes->get('product/(:any)', 'ProductController::product/$1');
	
  });

$routes->group('customer', ['namespace' => 'App\Controllers\Customer',"filter" => "auth"], function($routes) {

	// CUSTOMER DASHBOARD
	$routes->get('dashboard', 'CustomerController::dashboard');
	
  });




// * --------------------------------------------------------------------
// * ADMIN ROUTING STARTS HERE
// * --------------------------------------------------------------------



// * --------------------------------------------------------------------
// * ADMIN ROUTING ENDS HERE
// * --------------------------------------------------------------------

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
