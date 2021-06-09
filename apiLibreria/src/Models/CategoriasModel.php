<?php

namespace App\Models;
echo "model";
use App\Config\DB;

class CategoriasModel {
    private static $DB;

    public static function conexionDB(){
        CategoriasModel::$DB = new DB();
    }

    public static function getAll(){
        CategoriasModel::conexionDB();
        $sql = "SELECT * from categorias";
        $data = CategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
        //var_dump ($data->fetchAll());
    }
    public static function new($parametros){
        
        try{
            $valores = array_values($parametros);
            CategoriasModel::conexionDB();
            $sql = "insert into categorias (categoriaid, nombre_categoria) 
                    values (?, ?)";
            $data = CategoriasModel::$DB->run($sql, $valores);
            return "Categoria ". $parametros['nombre_categoria'] . " insertado correctamente ";
        }catch(Exception $e){
            return $e->getMessage();
         }
    }
}