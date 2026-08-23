<?php

namespace Model; 

class Bus {
    private string $placa;
    private int $capacidadPasajeros;
    private float $preciosPasaje;
    private int $pasajerosActuales;
    private int $totalPasajeros;

    public function __construct($placa, $capacidadPasajeros, $preciosPasaje, $pasajerosActuales, $totalPasajeros) {
        $this->placa = $placa;
        $this->capacidadPasajeros = $capacidadPasajeros;
        $this->preciosPasaje = $preciosPasaje;
        $this->pasajerosActuales = $pasajerosActuales;
        $this->totalPasajeros = $totalPasajeros;
    }

    public function Bus(String $placa, int $capacidadPasajeros, float $preciosPasaje) {
        $this->placa = $placa;
        $this->capacidadPasajeros = $capacidadPasajeros;
        $this->preciosPasaje = $preciosPasaje;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getCapacidad() {
        return $this->capacidadPasajeros;
    }

    public function getPreciosPasaje() {
        return $this->preciosPasaje;
    }

    public function getPasajerosActuales() {
        return $this->pasajerosActuales;
    }

    public function getPasajerosTotales() {
        return $this->totalPasajeros;
    }

    public function subirPasajeros(int $pasajerosActuales) {
        
        if ($this->pasajerosActuales + $pasajerosActuales <= $this->capacidadPasajeros) {
            $this->pasajerosActuales += $pasajerosActuales;
            $this->totalPasajeros += $pasajerosActuales;
        } else {
            echo "No se puede subir más pasajeros. Capacidad máxima alcanzada. <br>";
        }
    }

    public function bajarPasajeros(int $pasajerosActuales) {
        
        if ($this->pasajerosActuales - $pasajerosActuales >= 0) {
            $this->pasajerosActuales -= $pasajerosActuales;
            $this->totalPasajeros -= $pasajerosActuales;
        } else {
            echo "No se pueden bajar más pasajeros. No hay suficientes pasajeros en el bus. <br>";
        }
    }

    public function getDineroAcumulado() {
        return $this->totalPasajeros * $this->preciosPasaje;
    }

    public function mostrarInfo() {
        return "-----Placa: {$this->placa} <br>" .
               "Capacidad de Pasajeros: {$this->capacidadPasajeros} <br>" .
               "Precio del Pasaje: {$this->preciosPasaje} <br>" .
               "Pasajeros Actuales: {$this->pasajerosActuales} <br>" .
               "Total de Pasajeros Transportados: {$this->totalPasajeros} <br>" .
               "Dinero Acumulado: {$this->getDineroAcumulado()} <br>";
    }
}