<?php

namespace App;

use App\Controllers\AppController;
use App\Controllers\UserController;
use App\Router\Router;

require_once("vendor/autoload.php");

AppController::index();


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\AppController@index');
$router->get("/Passenger/:id", "App\Controllers\PassengerController@showOne");

$router->get("/Users/:id", "App\Controllers\UserController@showOne");
$router->post("/User", "App\Controllers\UserController@add");
$router->get("/User", "App\Controllers\UserController@add");
$router->post("/User/:id", "App\Controllers\UserController@modify");
$router->get("/User/:id", "App\Controllers\UserController@modify");

$router->get("/Airport", "App\Controllers\AirportController@index");

$router->run();