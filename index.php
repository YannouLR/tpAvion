<?php

namespace App;

use App\Controllers\AppController;
use App\Router\Router;

require_once("vendor/autoload.php");

AppController::index();


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\AppController@index');

$router->get('/utilisateur', 'App\Controllers\AppController@index');

$router->run();