<?php



class Routes
{
    private array $Routes = [
        "GET" => [
            '/' => [BokadiaController::class , 'index'],
        ]
    ]
}