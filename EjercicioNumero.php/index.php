<?php

// require_once __DIR__ . '/controller/ControladorCita.php';
// require_once __DIR__ . '/view/VistaCita.php';

require_once __DIR__ . '/vendor/autoload.php';

use Controller\ControladorCita; 
use Model\Cita;
use Model\Paciente;
use View\VistaCita;

// spl_autoload_register(function (string $class) {
//     $path = str_replace("\\", "/", $class) . '.php';
//     $path = 'src/' .$path;
//     require $path;
// });

$vista = new VistaCita();
$controlador = new ControladorCita($vista);
$controlador->demostrar();