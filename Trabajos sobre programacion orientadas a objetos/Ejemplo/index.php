<?php

require_once __DIR__ . '/controller/ControladorVehiculo.php';
require_once __DIR__ . '/view/VistaVehiculo.php';

$vista = new VistaVehiculo();
$controlador = new ControladorVehiculo($vista);

$controlador -> demostrar();

// $vehiculo = new Vehiculo("Daewoo", "carro", true);
// var_dump($vehiculo->getMarca());

// echo "este es la página de la entrada";