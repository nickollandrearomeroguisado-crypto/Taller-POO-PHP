<?php

require_once __DIR__ . '/controller/ControladorBus.php';
require_once __DIR__ . '/view/VistaBus.php';

$vista = new VistaBus();
$controlador = new ControladorBus($vista);
$controlador->demostrar();