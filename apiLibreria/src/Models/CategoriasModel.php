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

}