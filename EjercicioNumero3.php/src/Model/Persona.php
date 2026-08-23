<?php

namespace Model;

// require_once __DIR__ . '/Cliente.php';

class Persona extends Cliente {
    private string $cedula;
    private int $edad;

    public function __construct($nombre, $clientes, $numeroDeClientes, $nombreCliente, $cedula, $edad) {
        //Llama al padre (Reutilización)
        parent::__construct($nombre, $clientes, $numeroDeClientes, $nombreCliente);

        //Inicializamos los atributos cedula y edad de persona
        $this->cedula = $cedula;
        $this->edad = $edad;
    }

    public function Persona(string $cedula, string $nombreCliente, int $edad) {
        $this->cedula = $cedula;
        $this->nombreCliente = $nombreCliente;
        $this->edad = $edad;
    }

    public function obtIdentificacion() {
        return $this->cedula;
    }

    public function obtEdad() {
        
        if ($this->edad < 18) {
            return "{$this->nombreCliente}, {$this->edad}";
        } else if ($this->edad < 40) {
            return "{$this->nombreCliente}, {$this->edad}";
        } else if ($this->edad > 40){
            return "{$this->nombreCliente}, {$this->edad}";
        }
        
    }

    public function cumplirAños() {
        return $this->cedula;
    }

    public function mostrarInfo() {
        return parent::mostrarInfo() . "Todos los nombres y cédulas de las clientes del banco: " . implode(", ", $this->clientes) . ", {$this->cedula} <br>".
            "Nombres de los clientes menores de edad: {$this->nombreCliente} <br>".
            "El nombre y la edad del cliente más joven: {$this->nombreCliente}, {$this->edad} <br>".
            "El nombre y la edad del cliente más viejo: {$this->nombreCliente} , {$this->edad} <br>";
    }

    // public function mostrarInfo() {
    //     return parent::mostrarInfo() . "Todos los nombres y cédulas de las clientes del banco: {$this->clientes}, {$this->cedula} ". 
    //         "Nombres de los clientes menores de edad: {$this->obEdad()}".
    //         "El nombre y la edad del cliente más joven: {$this->clientes}, {$this->obtEdad()}". 
    //         "El nombre y la edad del cliente más viejo: {$this->clientes}, {$this->obtEdad()}";
    // }
}