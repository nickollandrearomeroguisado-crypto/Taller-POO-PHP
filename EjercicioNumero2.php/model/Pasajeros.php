<?php

require_once __DIR__ . '/Bus.php';

class Pasajeros extends Bus {
    private int $edad;

    public function __construct($placa, $capacidadPasajeros, $preciosPasaje, $pasajerosActuales, $totalPasajeros, $edad) {
        //Llama al padre (Reutlización)
        parent :: __construct($placa, $capacidadPasajeros, $preciosPasaje, $pasajerosActuales, $totalPasajeros);

        //Inicializamos el atributo edad de pasajeros
        $this->edad = $edad;
    }

    //GETTERS Y SETTERS de edad
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function mostrarInfo() {
        return parent::mostrarInfo() . "| Edad: {$this->edad} <br>"; 
    }
}