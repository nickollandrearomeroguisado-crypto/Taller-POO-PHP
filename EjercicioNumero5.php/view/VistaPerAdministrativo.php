<?php

class VistaPersonalAdministrativo {
    /** @param PersonalAdministrativo $personal */

    public function mostrarPersonal(PersonalAdministrativo $personal) {
        echo $personal->mostrarInfo();
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