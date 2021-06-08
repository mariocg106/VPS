<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/api/libros','App\Controllers\LibrosController:getAll');
    
$app->get('/api/libros/new','App\Controllers\LibrosController:new') ;

$app->get('/api/libros/new1','App\Controllers\LibrosController:new') ;
