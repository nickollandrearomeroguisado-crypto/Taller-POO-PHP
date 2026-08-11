<?php

require_once __DIR__ . '/Cita.php';

class Paciente extends Cita {
    private string $nombre; 

    public function __construct($numero, $tipo, $tarifa, $valorFinal, $nombre) {
        //Llama al padre (Reutilización)
        parent :: __construct($numero, $tipo, $tarifa, $valorFinal);

        //Inicializamos el atributo nombre del paciente
        $this->nombre = $nombre;
    }

    //GETTERS Y SETTERS propios de paciente
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre; 
    }

    public function mostrarInfo() {
        return parent::mostrarInfo() . " | Nombre del paciente: {$this->nombre} <br>";
    }

}