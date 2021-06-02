<?php
namespace App\Models;
use App\Config\DB;

class LibrosModel {
    private $db;

    public function __construct(){
        $this->$db = new DB();
    }

    public function getAll(){
        $sql = "SELECT * from libros";
        $data = $this->db->run($sql, []);
        //return $data->fetchAll();
        var_dump ($data->fetchAll());
    }

}