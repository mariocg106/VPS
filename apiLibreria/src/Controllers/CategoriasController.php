<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\CategoriasModel;

class CategoriasController {

    public function getAll(Request  $request, Response $response, $args){
        $categorias = CategoriasModel::getAll();
        $categorias_JSON = json_encode($categorias);
        $response->getBody()->write($categorias_JSON);
        return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
       
    }

    public function new(Request $request, response $response, $args){
        $parametros = (array)json_decode($request->getBody()->getContents());
        
        $resultado = CategoriasModel::new($parametros);
        $dataJson = json_encode(array(
            'status'=> 'exit', 
            '' => 'Registro insertado con éxito',
            'data' => $parametros));
        $response->getBody()->write($dataJson);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);

    }
}