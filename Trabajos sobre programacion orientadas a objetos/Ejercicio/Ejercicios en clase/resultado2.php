<?php

include 'Ejercicios de clase/resultado.php';

if (isset($_POST['enviar'])) {

    $nombre = $_POST['nombre'];
    $objeto = new Procesador('$nombre'); //Se crea el objeto (instancia de la clase) pasándole el valor

    echo $objeto -> encender(); 
}
