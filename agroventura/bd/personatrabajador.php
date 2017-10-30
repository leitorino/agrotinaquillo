<?php

class personatrabajador {
    private $idpersonatrabajador;
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $tipo_documento;
    private $num_documento;
    private $direccion;
    private $telefono;
    private $email;
    
    public function __construct($idpersonatrabajador, $nombre, $apaterno, $amaterno, $tipo_documento, $num_documento, $direccion, $telefono, $email) {
        $this->idpersonatrabajador=$idpersonatrabajador;
        $this->nombre = $nombre;
        $this->apaterno = $apaterno;
        $this->amaterno = $amaterno;
        $this->tipo_documento = $tipo_documento;
        $this->num_documento = $num_documento;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function getIdpersonatrabajador() {
        return $this->idpersonatrabajador;
    }

    public function setIdpersonatrabajador($idpersonatrabajador) {
        $this->idpersonatrabajador = $idpersonatrabajador;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApaterno() {
        return $this->apaterno;
    }

    public function setApaterno($apaterno) {
        $this->apaterno = $apaterno;
    }

    public function getAmaterno() {
        return $this->amaterno;
    }

    public function setAmaterno($amaterno) {
        $this->amaterno = $amaterno;
    }

    public function getTipo_documento() {
        return $this->tipo_documento;
    }

    public function setTipo_documento($tipo_documento) {
        $this->tipo_documento = $tipo_documento;
    }

    public function getNum_documento() {
        return $this->num_documento;
    }

    public function setNum_documento($num_documento) {
        $this->num_documento = $num_documento;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}



?>