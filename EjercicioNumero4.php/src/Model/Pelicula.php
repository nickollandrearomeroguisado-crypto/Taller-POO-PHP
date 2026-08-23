<?php

namespace Model;

class Pelicula {
    private string $titulo;
    private string $genero;
    private int $duracionMinutos;
    private string $clasificacion;
    private array $calificacionUsuarios = [];

    private static int $totalPeliculas = 0; //contador estàtico

    public function __construct($titulo, $genero, $duracionMinutos, $clasificacion, $calificacionUsuarios=[]) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracionMinutos = $duracionMinutos;
        $this->clasificacion = $clasificacion;
        $this->calificacionUsuarios = $calificacionUsuarios;

        self::$totalPeliculas++; //aumenta cada vez que se crea una películas
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getDuracionMinutos() {
        return $this->duracionMinutos * 60; //cambia de horas a minutos
    }

    public function getClasificacion() {
        return $this->clasificacion;
    }

    //validar que la calificacion esté entre 1 al 5
    public function setCalificacionUsuarios($calificacion) {
        if ($calificacion < 1 || $calificacion > 5) {
            return ("El valor debe estar entre 1 al 5");
        }

        $this->calificacionUsuarios[] = $calificacion;
    }

    //calcular el promedio
    public function calcularPromedio() { 
        $notas = count($this->calificacionUsuarios);

        //validar que no se divida en cero
        if ($notas === 0) {
            return 0.0;
        }

        $suma = array_sum($this->calificacionUsuarios);
        return $suma / $notas;
    }

    //Indica si la pelicula es recomendada
    public function PeliculaRecomendada() {
        return $this->calcularPromedio() >= 4.0;
    }

    public static function totalPeliculas() {
        return self::$totalPeliculas;
    }

    public function mostrarInfo() {
        $recomendada = $this->PeliculaRecomendada() ? "Sí" : "No";
        return "Película: {$this->titulo} | Género: {$this->genero} <br>" . 
        "Duración: {$this->getDuracionMinutos()} min <br>" . 
        "Clasificación: {$this->clasificacion} <br>" . 
        "Promedio: {$this->calcularPromedio()} <br>" . 
        "Recomendada: {$recomendada} <br>";
    }
}