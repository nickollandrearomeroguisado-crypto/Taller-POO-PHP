<?php

require_once __DIR__ .'/Vehiculo.php';

class Moto extends Vehiculo {
    //Atributo propio de moto
    private $cilindrada;

    public function __construct($marca, $estado, $cilindrada) {
        //Llama al padre (Reutilización)
        parent :: __construct($marca, 'Moto', $estado);

        //Inicializamos del atributo propio de moto
        $this -> cilindrada = $cilindrada;
    }

    //GETTERS Y SETTERS propios de moto
    public function getCilindrada() {
        return $this -> cilindrada;
    }

    public function setCilindrada($cilindrada) {
        $this -> cilindrada = $cilindrada;
    }

    public function mostrarInfo() {
        return parent :: mostrarInfo() . " | Cilindrada: {$this -> cilindrada} cc.";
    }
}