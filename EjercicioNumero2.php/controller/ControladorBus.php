<?php

//Importación de las clases del modelo que el controller usará
require_once __DIR__ . '/../model/Bus.php';
require_once __DIR__ . '/../model/Pasajeros.php';

//Importación a la view que el controller utilizará
require_once __DIR__ . '/../view/VistaBus.php';

class ControladorBus {
    private $vista;

    /** @param VistaBus $vista */
    public function __construct(VistaBus $vista) {
        $this->vista = $vista;
    }

    public function demostrar() {
        $this->vista->mostrarTitulo('Bus');

        $buses = array(
            new Bus('ABC123', 50, 2.50, 10, 20),
            new Pasajeros('DEF456', 30, 3.00, 5, 15, 50),
            new Bus('GHI789', 40, 2.75, 8, 18),
            new Pasajeros('JKL012', 25, 3.50, 12, 22, 30)
        );

        $this->vista->mostrarSeparador();
        foreach ($buses as $bus) {
            $this->vista->mostrarBus($bus);

            $bus->subirPasajeros(15);
            $bus->bajarPasajeros(5);
            echo $bus->mostrarInfo();
        }
        $this->vista->mostrarSeparador();

    }
}