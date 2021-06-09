<?php
echo "routes"
use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/api/categorias','App\Controllers\CategoriasController:getAll');
    
$app->post('/api/categorias/new','App\Controllers\CategoriasController:new') ;
