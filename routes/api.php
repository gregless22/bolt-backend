<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('car', 'CarsController@all');
$router->get('car/{id}', 'CarsController@get');
$router->post('car', 'CarsController@add');
$router->put('car/{id}', 'CarsController@put');
$router->delete('car/{id}', 'CarsController@remove');


//this is ued for testing before building the controller
$router->get('test', 'CarsModelController@all');