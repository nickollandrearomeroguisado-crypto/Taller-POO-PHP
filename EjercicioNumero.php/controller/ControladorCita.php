<?php

//Importacion de las clases del modelo que el controller usará
require_once __DIR__ . '/../model/Cita.php';
require_once __DIR__ . '/../model/Paciente.php';

//Importacion a la view que el controller utilizará
require_once __DIR__ . '/../view/VistaCita.php';

class ControladorCita {
    private $vista;

    /** @param VistaCita $vista */
    public function __construct(VistaCita $vista) {
        $this->vista = $vista;
    }

    public function demostrar() {
        $this->vista->mostrarTitulo('Citas');

        $citas = array(
            new Cita(1, 1, 100.0, 50.0),
            new Paciente(2, 2, 200.0, 100.0, 'Juan'),
            new Cita(3, 3, 150.0, 75.0),
            new Paciente(4, 4, 250.0, 125.0, 'Maria'),
            new Cita(5, 5, 300.0, 150.0)
        );

        $this->vista->mostrarSeparador();
        foreach ($citas as $cita) {
            $this->vista->mostrarCita($cita);
        }
        $this -> vista -> mostrarSeparador();

    }
}