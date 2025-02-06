<?php

// use Src\Controllers\ProductController;

include_once($_SERVER['DOCUMENT_ROOT'] .'./commerce/src/controller/ProductController.php');

class Routes
{
    private array $routes = [
        "POST" => [
            // "/signup" => [UserController::class, "register"],
            // "/signin" => [UserController::class, "login"],
            // "/addProduct" => [ProductController::class, "Create"],
            // "/updateProduct" => [ProductController::class, "Update"],
            // "/addOrder" => [OrderContreller::class, "Create"],
        ],
        "GET" => [
            '/' => [ProductController::class, 'index'],
            '/admine' => [ProductController::class, 'productAdmin'],
        ]
    ];

    public function dispatch($method, $uri){
        if ($this->routes[$method][$uri]) {
            [$class, $action] = $this->routes[$method][$uri];
            $controller = new $class();
            $controller->$action();
        }
    }
}