<?php

require_once __DIR__ . '/PersonalAdministrativo.php';

class Estudiante extends PersonalAdministrativo {
    private array $inscribirseCurso = [];

    public function __construct($nombre, $documento, $correo, $procesosAcademicos, $curso, $calificaciones, $inscribirseCurso) {
        //Llama al padre (Retilizacion)
        parent::__construct($nombre, $documento, $correo, $procesosAcademicos, $curso, $calificaciones);

        //Inicializamos el atributo inscribirseCurso
        $this->inscribirseCurso[] = $inscribirseCurso;
    }

    public function getInscribirseCurso() {
        return $this->inscribirseCurso;
    }

    public function setInscribirseCurso($inscribirseCurso) {
        $this->inscribirseCurso[] = $inscribirseCurso;
    } 

    public function mostrarInfo() {
        return parent::mostrarInfo() . "| Inscripcion de curso: ". implode(",", $this->inscribirseCurso) .  "<br><br>";
    }
}