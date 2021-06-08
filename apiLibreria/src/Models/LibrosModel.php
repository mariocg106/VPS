<?php
namespace App\Models;
use App\Config\DB;

class LibrosModel {
    private static $DB;

    public static function conexionDB(){
        LibrosModel::$DB = new DB();
    }

    public static function getAll(){
        LibrosModel::conexionDB();
        $sql = "SELECT * from libros";
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
        //var_dump ($data->fetchAll());
    }

}