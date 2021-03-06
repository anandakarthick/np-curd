<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}
/**
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
// $routes->get( '/', 'Home::index' );
$routes->get( '/', 'UserController::index' );
$routes->get( 'add', 'UserController::add' );
$routes->post( 'add', 'UserController::add' );
$routes->get( 'edit/(:num)', 'UserController::edit/$1' );
$routes->post( 'edit/(:num)', 'UserController::edit/$1' );
$routes->get( 'delete/(:num)', 'UserController::delete/$1' );
$routes->get( 'view/(:num)', 'UserController::view/$1' );

// api routes start
$routes->group('api',function($routes){
$routes->group('v1',function($routes){
    
    $routes->post('user_list', 'ApiController::index' );
    $routes->post('add', 'ApiController::add_user' );
    $routes->post('get_user_details', 'ApiController::get_user_details' );
    $routes->post('edit_user', 'ApiController::edit_user' );
    $routes->post('delete_user', 'ApiController::delete_user' );
    

   });
});


//api routes end
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
if ( file_exists( APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php' ) ) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
