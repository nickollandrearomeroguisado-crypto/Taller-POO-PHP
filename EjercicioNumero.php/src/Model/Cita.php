<?php

namespace Model;

class Cita {
    private int $numero;
    private int $tipo;
    private float $tarifa;
    private float $valorFinal;

    public function __construct(int $numero, int $tipo, float $tarifa, float $valorFinal) {
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->tarifa = $tarifa;
        $this->valorFinal = $valorFinal;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getTipo() {
        // return $this->tipo;

        if ($this->tipo == 1) {
            return "General";
        } else if ($this->tipo == 2) {
            return "General";
        } else if ($this->tipo == 3) {
            return "General";
        } else if ($this->tipo == 4) {
            return "Especialista";
        } else if ($this-> tipo == 5) {
            return "Especialista";
        }

        return $this->tipo;
    }

    public function getTarifa() {
        return $this->tarifa;
    }

    public function calcularValorFinal() {
        // return $this->valorFinal;

        $resultado = $this->tarifa;
        $resultado .= $this->tipo; //.= es el operador de concatenación con asignación. Combina dos operaciones en una sola:
        $resultado .= $this->valorFinal;

        if ($this->tipo == 1 || $this->tipo == 2 || $this->tipo == 3) {
            $valorFinal = $resultado * 0.50; // Aplica un descuento del 50% al resultado final
        } else if ($this->tipo == 4 || $this->tipo == 5) {
            $valorFinal = $resultado * 0.50; 
        }

        return $this->valorFinal;
    }

    public function mostrarInfo() {
        return "El número de cita es: {$this->numero} <br>" .
               "Esta cita es tipo: {$this->getTipo()} <br>" .
               "Su tarifa normal es: {$this->tarifa} <br>" .
               "Pero por ser de tipo: {$this->getTipo()} queda con un valor final de: {$this->calcularValorFinal()} <br>";
    }

}
