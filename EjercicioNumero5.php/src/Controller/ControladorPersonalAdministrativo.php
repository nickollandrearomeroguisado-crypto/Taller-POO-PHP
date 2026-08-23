<?php

namespace Controller;

use View\VistaPersonalAdministrativo;
use Model\PersonalAdministrativo;
use Model\Docente;
use Model\Estudiante;

//Importacion de las clases del modelo que el controller usara
// require_once __DIR__ . '/../model/PersonalAdministrativo.php';
// require_once __DIR__ . '/../model/Docentes.php';
// require_once __DIR__ . '/../model/Estudiantes.php';

//Importacion a la view que el controller utlizara
// require_once __DIR__ . '/../view/VistaPerAdministrativo.php';

class ControladorPersonalAdministrativo {
    private $vista;

    /** @param VistaPersonalAdministrativo $vista */
    public function __construct(VistaPersonalAdministrativo $vista) {
        $this->vista = $vista;
    }

    public function demostrar() {
        $this->vista->mostrarTitulo('Centro de Formacion Tecnologica');

        $administrativos = array(
            new PersonalAdministrativo('Carlos', 1234567, 'carlos@gmail.com', "Matriculas y admisiones"),
            new PersonalAdministrativo('Joel', 11013563478, 'joel@gmial.com', 'Gestion de horarios'),
            new PersonalAdministrativo('Camilo', 11012484590, 'camilo@gmail.com','Certificados y constancias')
        );

        $estudiantes = array(
            new Estudiante('Sara', 110134289, 'sara@gmail.com', 'Coordinacion', 'C++', 5.0, 'HTML'),
            new Estudiante('Ana', 11012973495, 'ana@gmail.com', 'Seguimiento de asistencia', 'Python', 4.0, 'CSS'),
            new Estudiante('Emmanuel', 11015693412, 'emmnauel@gmail.com', 'Grados y titulaciones', 'SQL', 5.0, 'Bases de datos MySql')
        );

        $docentes = array(
            new Docente('Carmen', 10157456, 'carmne@gmail.com', 'Coordinacion academico', 'PHP', 4.0),
            new Docente('Jose', 11013853659, 'jose@gmail.com', 'Seguimiento academico', 'Java', 5.0),
            new Docente('Horacio', 11017893469, 'horacio@gmail.com', 'Observacion', 'POO', 4.5)
        );

        $this->vista->mostrarSeparador();
        foreach ($administrativos as $administrativo) {
            $this->vista->mostrarPersonal($administrativo);
        }

        foreach ($docentes as $docente) {
            $this->vista->mostrarPersonal($docente);
        }

        foreach ($estudiantes as $estudiante) {
            $this->vista->mostrarPersonal($estudiante);
        }
        $this->vista->mostrarSeparador();

        
    }
}