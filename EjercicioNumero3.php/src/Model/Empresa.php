<?php

namespace Model;

// require_once __DIR__ . '/Persona.php';

class Empresa extends Persona {
    private string $nit;
    private string $representante;

    public function __construct($nombre, $clientes, $numeroDeClientes, $nombreCliente, $cedula, $edad, $nit, $representante) {
        //Llama al padre (Reutilización)
        parent::__construct($nombre, $clientes, $numeroDeClientes, $nombreCliente, $cedula, $edad);

        //Inicializamos los atributos nit y representante de empresa
        $this->nit = $nit;
        $this->representante = $representante;
    }

    public function Empresa(string $nit, string $nombreCliente, string $representante) {
        $this->nit = $nit;
        $this->nombreCliente = $nombreCliente;
        $this->representante = $representante;
    }

    public function obtIdentificacion() {
        return $this->cedula;
    }

    public function obtRepresentante() {
        return $this->representante;
    }

    public function cambiarRepres(string $representante) {
        $this->representante = $representante;
    }

    public function mostrarInfo() {
        return parent::mostrarInfo() . "| El nombre y representante de cada empresa: {$this->nombre}, {$this->representante} <br>";
    }
}