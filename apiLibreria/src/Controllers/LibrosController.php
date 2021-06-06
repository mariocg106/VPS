<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Model\LibrosModel;    

    class LibrosController {
        
        public function new($request, $response, $args){
            $response->getBody()->write("Insertar un nuevo Libro");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function getAll($request, $response, $args){
            $libros = LibrosModel::getAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function getFilter($request, $response, $args){
            $parametros = $request->getQueryParams();
            $categoria = $parametros['idCat'];
            $param = array($categoria);
            $libros = LibrosModel::getFilter($param);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }