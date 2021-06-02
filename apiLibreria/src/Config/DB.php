<?php

namespace APP\Config;

use \PDO;
use App\Config\config;


class DB {
    protected $pdo;

    //establece la conexión al hacer un new DB() desde el Controlador
    public function __construct(){
        //opciones en como mysql le pasa los datos a php (apache)
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //que PDO lance las excepciones si hay errores
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ //los resultados los regrese en un objeto
        ];

        //CADENA DE CONEXIÓN A LA BD
        
        $dsn = 
            "mysql:host=".config::DB_HOST.
            ";port=".config::DB_PORT.
            ";dbname=".config::DB_NAME.
            ";charset=".config::DB_CHARSET;
        
        //se establece la conexión con la BD
        $this->pdo = new PDO($dsn, config::DB_USER, config::DB_PASSWD, $opciones);
    }

    public function run($sql, $args = []){
        // Ejecutará las consulta $sql con parámetros que le pasemos
        //sql --> select * from articulos where id = ? and precio > ?
        //En args meteremos variables del where de una consulta --> $args = [10, 56.7]
        if (!$args){
            $data = $this->pdo->query($sql);
            return $data;
        }
    }



}