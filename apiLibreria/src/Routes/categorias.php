<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/api/categorias', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Listado de Categorias");
    return $response;
});
$app->get('/api/categorias/new', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Insertar una Nueva Categoria");
    return $response;
});
