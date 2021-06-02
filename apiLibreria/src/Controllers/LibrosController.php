<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\LibrosModel;

class LibrosController {

    public function getAll(Request  $request, Response $response, $args){
        $libros = LibrosModel::getAll();
        $libros_JSON = json_encode($libros);
        $response->getBody()->write($libros_JSON);
        return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
       
    }

    public function new(Request  $request, Response $response, $args){
        echo "Insertar nuevo Libro";
    }
}