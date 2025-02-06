<?php

// require './vendor/autoload.php';

// use Src\Controllers\ProductController;


require './src/routes/routes.php';
include_once($_SERVER['DOCUMENT_ROOT'] .'./commerce/src/controller/ProductController.php');


$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$uriclean = str_replace('/commerce', '', $uri);

$url = parse_url($uriclean, PHP_URL_PATH);

$routes = new Routes();
$routes->Dispatch($method, $url);