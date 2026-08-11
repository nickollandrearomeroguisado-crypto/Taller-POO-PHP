<?php

require_once __DIR__ . '/PersonalAdministrativo.php';

class Docente extends PersonalAdministrativo {
    private string $curso;
    private array $calificaciones = [];

    public function __construct($nombre, $documento, $correo, $procesosAcademicos, $curso, $calificaciones) {
        //Llama al padre Reutilizacion
        parent::__construct($nombre, $documento, $correo, $procesosAcademicos);

        //Inicializamos el atributo curso y calificaciones
        $this->curso = $curso;
        $this->calificaciones[] = $calificaciones;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getCalificaciones() {
        return $this->calificaciones;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setCalificaciones($calificaciones) {
        $this->calificaciones[] = $calificaciones;
    }

    public function calcularPromedio() {
        $cantidad = count($this->calificaciones);

        if ($cantidad === 0) {
            return 0;
        } 

        return array_sum($this->calificaciones) / $cantidad;
    }

    public function mostrarInfo() {
        return parent:: mostrarInfo() . "| Dictan curso: {$this->curso} <br>" . 
        "Registran califiaciones: ". implode(",", $this->calificaciones). "<br>" . 
        "Promedio: {$this->calcularPromedio()} <br><br>"; //implode() toma cada elemento del arreglo y los pega uno tras otro, colocando el separador (en este caso ", " — una coma y un espacio) entre cada valor.
    }
}