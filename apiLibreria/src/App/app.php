<?php

use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Slim\Exception\HttpNotFoundException;

// cargamos el autoload para que pueda detectar el resto de las clases
require __DIR__ . '/../../vendor/autoload.php';


// creamos la aplicación php
$app = AppFactory::create();
//$app->setBasePath("/Libreria/apiLibreria/public/index.php");

//Cargamos en memoria los archivos de rutas que contendrán los entrypoints a cada una de las tablas.
//los entrypoints harán referencia a las acciones CRUD de una tabla de nuestra BD

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

require __DIR__ . "/../Routes/libros.php";
require __DIR__ . "/../Routes/categorias.php";
//require __DIR__ . "/../Routes/usuarios.php";
require __DIR__ . "/../Routes/editores.php";

$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});


$app->run();