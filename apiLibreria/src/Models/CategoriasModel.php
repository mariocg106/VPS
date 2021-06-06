<?php
namespace App\Model;
use App\Config\DB;
use Exception;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class CategoriasModel {
    private static $table = 'categorias';
    private static $DB;

    public static function conexionDB(){
        CategoriasModel::$DB = new DB();
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
    public static function getAll(){
        CategoriasModel::conexionDB();
        $sql = "Select * from categorias";
        $data = CategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        LibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = CategoriasModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}