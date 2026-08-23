<?php

namespace View;

use Model\Pelicula; 

class VistaPelicula {
    /** @param Pelicula $pelicula */

    public function mostrarPelicula(Pelicula $pelicula) {
        echo $pelicula->mostrarInfo();
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