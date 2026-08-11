<?php

require_once __DIR__ . '/controller/ControladorPelicula.php';
require_once __DIR__ . '/view/VistaPelicula.php';

$vista = new VistaPelicula();
$controlador = new ControladorPelicula($vista);
$controlador->demostrar();