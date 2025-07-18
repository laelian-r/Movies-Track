<?php
session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new MoviesTrack\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");
$router->get('/films', "FilmsController@movies");
$router->get('/series', "SeriesController@series");

$router->run();