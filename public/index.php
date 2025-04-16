<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new MoviesTrack\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");
$router->get('/films', "CatalogController@movies");
$router->get('/series', "CatalogController@series");

$router->run();