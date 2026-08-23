<?php

// require_once __DIR__ . '/controller/ControladorPerAdminisstrativo.php';
// require_once __DIR__ . '/view/VistaPerAdministrativo.php';

require_once __DIR__ . '/vendor/autoload.php';

use Controller\ControladorPersonalAdministrativo;
use Model\PersonalAdministrativo;
use Model\Docente;
use Model\Estudiante;
use View\VistaPersonalAdministrativo; 

// spl_autoload_register(function (string $class) {
//     $path = str_replace("\\", "/", $class) . '.php';
//     $path = 'src/' .$path;
//     require $path; 
// });

$vista = new VistaPersonalAdministrativo();
$controlador = new ControladorPersonalAdministrativo($vista);
$controlador->demostrar();