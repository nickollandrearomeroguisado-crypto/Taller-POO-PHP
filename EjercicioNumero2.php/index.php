<?php

// require_once __DIR__ . '/controller/ControladorBus.php';
// require_once __DIR__ . '/view/VistaBus.php';

require_once __DIR__ . '/vendor/autoload.php';

use Controller\ControladorBus;
use Model\Bus;
use Model\Pasajeros;
use View\VistaBus;

// spl_autoload_register(function (string $class) {
//     $path = str_replace("\\", "/", $class) . '.php';
//     $path = 'src/' .$path;
//     require $path;
// });

$vista = new VistaBus();
$controlador = new ControladorBus($vista);
$controlador->demostrar();