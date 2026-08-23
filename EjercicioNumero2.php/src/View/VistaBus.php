<?php

namespace View;

use Model\Bus; 

class VistaBus {
    /** @param Bus $bus */

    public function mostrarBus(Bus $bus) {
        echo $bus->mostrarInfo();
    }

    public function mostrarSeparador() {
        echo str_repeat("-", 60);
        echo "<br>";
    }

    /** @param string $titulo */
    public function mostrarTitulo($titulo) {
        echo "==={$titulo}===";
    }
}