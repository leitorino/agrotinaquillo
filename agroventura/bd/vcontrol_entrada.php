<?php

class vcontrol_entrada {
    private $idcontrol_entrada;
    private $nombre;
    private $precio_general;
    private $precio_niño;
    private $precio_3edad;
    private $impuesto;

    public function __construct($idcontrol_entrada,$nombre, $precio_general, $precio_niño,$precio_3edad,$impuesto) {
        $this->idcontrol_entrada = $idcontrol_entrada;
      
        $this->nombre = $nombre;
        $this->precio_general = $precio_general;
        $this->precio_niño=$precio_niño;
        $this->precio_3edad = $precio_3edad;
        $this->impuesto=$impuesto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getIdcontrol_entrada() {
        return $this->idcontrol_entrada;
    }

    public function setIdcontrol_entrada($idcontrol_entrada) {
        $this->idcontrol_entrada =$idcontrol_entrada;
    }

    public function getPrecio_general() {
        return $this->precio_general;
    }

    public function setPrecio_general($precio_general) {
        $this->precio_general = $precio_general;
    }

    public function getPrecio_3aedad() {
        return $this->precio_3edad;
    }

    public function setPrecio_3aedad($precio_3aedad) {
        $this->precio_3edad = $precio_3edad;
    }
    
    
     public function getPrecio_niño() {
        return $this->precio_niño;
    }

    public function setPrecio_niño($precio_niño) {
        $this->precio_niño = $precio_niño;
    }
    
     public function getImpuesto() {
        return $this->impuesto;
    }

    public function setImpuesto($impuesto) {
        $this->impuesto = $impuesto;
    }

    
}


?>