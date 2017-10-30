<?php

class vpersona {
    private $idpersona;
     private $usuario;
    private $contraseña;
    private $nombre;
    private $apellidos;   
    private $tipo_documento;
    private $num_documento;
    private $direccion;
    private $telefono;
    private $email;
   

    public function __construct($idpersona,$usuario, $contraseña,$nombre, $apellidos,  $tipo_documento, $num_documento, $direccion, $telefono, $email) {
        $this->idpersona = $idpersona;
        $this->usuario = $usuario;
        $this->contraseña= $contraseña;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
       
        $this->tipo_documento = $tipo_documento;
        $this->num_documento = $num_documento;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function getIdpersona() {
        return $this->idpersona;
    }

    public function setIdpersona($idpersona) {
        $this->idpersona = $idpersona;
    }
public function getusuario() {
        return $this->usuario;
    }

    public function setusuario($usuario) {
        $this->usuario = $usuario;
    }
    public function getcontraseña() {
        return $this->contraseña;
    }

    public function setcontraseña($contraseña) {
        $this->contraseña = $contraseña;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
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