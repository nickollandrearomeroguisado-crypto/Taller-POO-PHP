<?php

//Encapsulamiento
class Vehiculo {
    private string $marca;
    private string $tipo;
    private bool $estado;

    public function __construct($marca, $tipo, $estado) {
        $this -> marca = $marca; 
        $this -> tipo = $tipo;
        $this -> estado = $estado;
    }

    //GETTERS
    public function getMarca() {
        return $this -> marca;
    }

    public function getTipo() {
        return $this -> tipo;
    }

    public function getEstado() {
        return $this -> estado;
    }

    //SETTERS
    public function setMarca($marca) {
        $this -> marca = $marca;
    }

    public function setTipo($tipo) {
        $this -> tipo = $tipo;
    }

    public function setEstado($estado) {
        $this -> estado = $estado;
    }

    //Polimorfismo
    public function mostrarInfo() {
        return "Marca: {$this -> marca} | Tipo: {$this->tipo} | Estado: {$this->estado}";
    }
    
}

