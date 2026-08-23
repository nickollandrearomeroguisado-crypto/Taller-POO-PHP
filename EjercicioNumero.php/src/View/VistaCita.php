<?php

namespace View;

use Model\Cita;

class VistaCita {
    /** @param Cita $cita */

    public function mostrarCita(Cita $cita) {
        echo $cita->mostrarInfo();
    }

    public function mostrarSeparador() {
        echo str_repeat('-', 60);
        echo "<br>";
    }

    /** @param string $titulo */
    public function mostrarTitulo($titulo) {
        echo "==={$titulo}===";
    }
}