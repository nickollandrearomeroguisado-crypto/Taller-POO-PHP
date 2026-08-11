<?php

require_once __DIR__ . '/controller/ControladorCita.php';
require_once __DIR__ . '/view/VistaCita.php';

$vista = new VistaCita();
$controlador = new ControladorCita($vista);
$controlador->demostrar();