<?php
class vcaney {
    private  $idcaney;
    private  $nombre;
    private  $cantidad;

   public function __construct($idcaney,  $nombre, $cantidad) {
        $this->idcaney = $idcaney;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }  

    public function getIdcaney() {
        return $this->idcaney;
    }

    public function setIdcaney($idcaney) {
        $this->idcaney = $idcaney;
    }

 
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }      
}

?>