<?php
echo "controller"
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\CategoriasModel;    

    class CategoriasController {
        public function new(Request $request, response $response, $args){
            $parametros = $request->getParsedBody();
        //    $parametros = $request->getBody()->getContents();
            $parametros = (array)json_decode($request->getBody()->getContents());
           // $result = UsuariosModel::new($parametros); 
            $categoriaid = $parametros['categoriaid'];
            $nombre = $parametros['nombre_categoria'];
            $valores = array($categoriaid, $nombre);
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
        public function getAll($request, $response, $args){
            $categorias = CategoriasModel::getAll();
            $categoriasjson = json_encode($categorias);
            $response->getBody()->write($categoriasjson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }