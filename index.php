<?php

namespace App;

use App\Controllers\AppController;
use App\Controllers\UserController;
use App\Router\Router;

require_once("vendor/autoload.php");

AppController::index();


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\AppController@index');
$router->post('/login', 'App\Controllers\AppController@login');
$router->get('/login', 'App\Controllers\AppController@login');

$router->get("/Passenger/:id", "App\Controllers\PassengerController@showOne");

$router->get("/Users/:id", "App\Controllers\UserController@showOne");
$router->post("/AUser", "App\Controllers\UserController@add");
$router->get("/AUser", "App\Controllers\UserController@add");
$router->post("/MUser/:id", "App\Controllers\UserController@modify");
$router->get("/MUser/:id", "App\Controllers\UserController@modify");
$router->get("/DUser/:id", "App\Controllers\UserController@delete");

$router->get("/Airport", "App\Controllers\AirportController@index");

$router->run();