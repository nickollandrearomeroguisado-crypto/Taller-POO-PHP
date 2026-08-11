<?php

class VistaBanco {
    /** @param Banco $banco */

    public function mostrarBanco(Banco $banco) {
        echo $banco->mostrarInfo();
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