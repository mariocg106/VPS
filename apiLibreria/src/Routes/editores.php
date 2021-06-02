<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/api/editores', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Listado de Editores");
    return $response;
});
$app->get('/api/editores/new', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Insertar una Nueva editor");
    return $response;
});