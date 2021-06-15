<?php

namespace App\Models;

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
            var_dump($valores);
            CategoriasModel::conexionDB();
            $sql = "INSERT into categorias values (?, ?)";
            $data = CategoriasModel::$DB->run($sql, $valores);
            return "Categoria insertada correctamente ";
        }catch(Exception $e){
            return $e->getMessage();
         }
    }
}