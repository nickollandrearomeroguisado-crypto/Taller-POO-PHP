<?php

require_once __DIR__ . '/controller/ControladorBanco.php';
require_once __DIR__ . '/view/VistaBanco.php';

$vista = new VistaBanco();
$controlador = new ControladorBanco($vista);
$controlador->demostrar();