<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\LibrosModel;

class CategoriasController {

    public function getAll(Request  $request, Response $response, $args){
        $categorias = CategoriasModel::getAll();
        $categorias_JSON = json_encode($categorias);
        $response->getBody()->write($categorias_JSON);
        return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
       
    }

    public function new(Request  $request, Response $response, $args){
        $response->getBody()->write("Categoria insertada correctamente");
        return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
    }
}

echo "controller";