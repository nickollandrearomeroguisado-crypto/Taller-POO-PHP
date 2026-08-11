<?php

//Programación Orientada a Objetos
//Se define las clase
class Vehiculo {
    public $marca;
    public $estado; //atributos
    public $tipo;
}

//Herencia
//Se define la clase moto a vehiculos
class Moto extends Vehiculo{
    public function encender() {    //metodo de la clase moto
        return "La moto se enciende";
    }
}

//Se define la clase bus a vehiculos
class Bus extends Vehiculo{
    public function encender() {    //metodo de la clase de bus
        return "El bus se enciende";
    }
}

//Polimorfismo
function acelerar(Vehiculo $vehiculo) {
    echo $vehiculo -> encender() . "\n";    //-> sirve para acceder a atributos o metodos de un objeto
}

$moto = new Moto(); //se utiliza para crear una instancia "una instancia es un objeto individual creado a partir de una plantilla llamada clase. Funciona como un objeto real en la memoria que usa las propiedades y las funciones definidas en esa clase."
$Bus = new Bus();

// //Imprime el resultado
acelerar($moto);
echo "<br>";
acelerar($Bus);
