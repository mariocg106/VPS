<?php

use Slim\Factory\AppFactory;

require __DIR__ .'/../../vendor/autoload.php';


$app = AppFactory::create();

require __DIR__ .'/../Routes/libros.php';
require __DIR__ .'/../Routes/categorias.php';
require __DIR__ .'/../Routes/editores.php';


$app->run();



