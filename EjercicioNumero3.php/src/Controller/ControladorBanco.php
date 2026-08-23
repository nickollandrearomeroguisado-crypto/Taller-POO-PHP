<?php

namespace Controller;

use View\VistaBanco;
use Model\Banco;
use Model\Cliente;
use Model\Empresa;
use Model\Persona;

//Importación de las clases del modelo que el controller usará
// require_once __DIR__ . '/../model/Banco.php';
// require_once __DIR__ . '/../model/Cliente.php';
// require_once __DIR__ . '/../model/Persona.php';
// require_once __DIR__ . '/../model/Empresa.php';

//Importación a la view que el controller utilizará
// require_once __DIR__ . '/../view/VistaBanco.php';

class ControladorBanco {
    private $vista;

    /** @param VistaBanco $vista */
    public function __construct(VistaBanco $vista) {
        $this->vista = $vista;
    }

    public function demostrar() {
        $this->vista->mostrarTitulo('Banco');

        $bancos = array(
            new Banco('Coomuldesa', ["Juan", "Maria", "Fernando"], 5),
            new Persona('BBVA', ["Carlos", "Sara", "Alejandro"], 6, 'Alfonso', 234567, 15),
            new Persona('Bancolombia', ["Alejandra", "Fabián", "Jhoan"], 4, 'Hernesto', 123456, 20),
            new Empresa('Cajasan', ["Jose", "Juliana", "Valeria"], 8, 'Sebastian', 789123, 35, 271840289, 'Pablo'),
            new Banco('Coomuldesa', ["Leonardo", "Fernanda", "Luis"], 8),
            new Persona('BBVA', ["Laura", "Sofia", "Alex"], 6, 'Miriam', 891234, 40),
            new Persona('Bancolombia', ["Alexandra", "Brailen", "Emmanuel"], 4, 'Julian', 456789, 13),
            new Empresa('Cajasan', ["Jhonatan", "Alejandro", "Mildred"], 8, 'Camilo', 912345, 50, 457123390, 'Manuel')
        );

        $this->vista->mostrarSeparador();
        foreach ($bancos as $banco) {
            $this->vista->mostrarBanco($banco);
        }
        $this -> vista -> mostrarSeparador();

    }
}