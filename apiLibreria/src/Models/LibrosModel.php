<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class LibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        LibrosModel::$DB = new DB();
    }
    public static function getFilter($parametros){
        $sql = 
        "select *, Cat.nombre_categoria, Ed.nombre_editorial 
        from libros 
        inner join categorias Cat
        on libros.categoriaid = Cat.categoriaid 
        inner join editores Ed
        on libros.editorid = Ed.editorid
        where libros.categoriaid = ?";
        LibrosModel::conexionDB();
        $data = LibrosModel::$DB->run($sql, $parametros);
        return $data->fetchAll();
    }

    public static function getAll(){
        LibrosModel::conexionDB();
        $sql = "select *, Cat.nombre_categoria, Ed.nombre_editorial 
        from libros 
        inner join categorias Cat
        on libros.categoriaid = Cat.categoriaid 
        inner join editores Ed
        on libros.editorid = Ed.editorid";
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        LibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = LibrosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}