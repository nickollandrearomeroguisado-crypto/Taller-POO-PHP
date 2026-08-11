<?php

class Banco {
    protected string $nombre;
    protected array $clientes;
    protected int $numeroDeClientes;

    public function __construct($nombre, $clientes, $numeroDeClientes) {
        $this->nombre = $nombre;
        $this->clientes = $clientes; 
        $this->numeroDeClientes = $numeroDeClientes;
    }

    public function Banco(string $nombre) {
        $this->nombre = $nombre;
    }

    public function obtNombre() {
        return $this->nombre;
    }

    public function cambiarNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function asClientes(Cliente $clientes) {
        $this->clientes = $clientes;
    }

    public function obtNumClientes() {
        return $this->numeroDeClientes;
    }

    public function obtCliente(int $posicion) {
        return $this->$clientes[$posicion];
    }

    public function obtClientes() {
        return $this->clientes = $clientes;
    }

    public function mostrarInfo() {
        return "Todos los nombres de los clientes: " . implode(", ", $this->clientes) . " <br>";
    }    

    // public function mostrarInfo() {
    //     return "Todos los nombres de los clientes: {$this->clientes} <br>";
    // }
}