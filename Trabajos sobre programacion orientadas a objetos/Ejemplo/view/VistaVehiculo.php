<?php

class VistaVehiculo {
    /** @param Vehiculo $vehiculo */

    public function mostrarvehiculo(Vehiculo $vehiculo) {
        echo $vehiculo -> mostrarInfo();
    }

    public function mostrarSeparador() {
        echo str_repeat('-', 60);
    }

    /** @param string $titulo */
    public function mostrarTitulo($titulo) {
        echo "=== {$titulo} ===";
    }
}