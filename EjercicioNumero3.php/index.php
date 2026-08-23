<?php

// require_once __DIR__ . '/controller/ControladorBanco.php';
// require_once __DIR__ . '/view/VistaBanco.php';

require_once __DIR__ . '/vendor/autoload.php';

use Controller\ControladorBanco;
use Model\Banco;
use Model\Cliente;
use Model\Empresa;
use Model\Persona;
use View\VistaBanco;

// spl_autoload_register(function (string $class) {
//     $path = str_replace("\\", "/", $class) . '.php';
//     $path = 'src/' .$path;
//     require $path;
// });

$vista = new VistaBanco();
$controlador = new ControladorBanco($vista);
$controlador->demostrar();