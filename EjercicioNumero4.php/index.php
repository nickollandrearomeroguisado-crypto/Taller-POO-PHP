<?php

// require_once __DIR__ . '/controller/ControladorPelicula.php';
// require_once __DIR__ . '/view/VistaPelicula.php';

require_once __DIR__ . '/vendor/autoload.php';

use Controller\ControladorPelicula;
use Model\Pelicula;
use View\VistaPelicula;

// spl_autoload_register(function (string $class) {
//     $path = str_replace("\\", "/", $class) . '.php';
//     $path = 'src/' .$path;
//     require $path; 
// });

$vista = new VistaPelicula();
$controlador = new ControladorPelicula($vista);
$controlador->demostrar();