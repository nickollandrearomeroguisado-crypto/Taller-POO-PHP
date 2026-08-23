<?php

namespace Model;

class PersonalAdministrativo {
    private string $nombre;
    private int $documento;
    private string $correo;
    private string $procesosAcademicos;

    private static int $totalRegistrados = 0;

    public function __construct($nombre, $documento, $correo, $procesosAcademicos) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->correo = $correo;
        $this->procesosAcademicos = $procesosAcademicos;

        self::$totalRegistrados++;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getProcesosAcademicos() {
        return $this->procesosAcademicos;
    }

     public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setProcesosAcademicos($procesosAcademicos) {
        $this->procesosAcademicos = $procesosAcademicos;
    }

    public static function totalRegistrados() {
        return self::$totalRegistrados;
    } 

    public function mostrarInfo(){
        return "Nombre: {$this->nombre} <br>" . 
        "Documento: {$this->documento} <br>" . 
        "Correo: {$this->correo} <br>" . 
        "Procesos Academicos: {$this->procesosAcademicos} <br>-----";
    }
}