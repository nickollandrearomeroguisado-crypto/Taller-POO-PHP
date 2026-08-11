<?php

require_once __DIR__ . '/Banco.php';

abstract class Cliente extends Banco {
    protected string $nombreCliente;

    public function __construct($nombre, $clientes, $numeroDeClientes, $nombreCliente) {
        //Llama al padre (Reutilización)
        parent::__construct($nombre, $clientes, $numeroDeClientes);

        //Inicializamos el atributo nombre del cliente
        $this->nombreCliente = $nombreCliente;
    }

    public function Cliente(string $nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    public function obtNombre() {
        return $this->nombreCliente;
    }

    abstract public function obtIdentificacion();
}