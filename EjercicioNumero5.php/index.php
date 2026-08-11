<?php

require_once __DIR__ . '/controller/ControladorPerAdminisstrativo.php';
require_once __DIR__ . '/view/VistaPerAdministrativo.php';

$vista = new VistaPersonalAdministrativo();
$controlador = new ControladorPersonalAdministrativo($vista);
$controlador->demostrar();