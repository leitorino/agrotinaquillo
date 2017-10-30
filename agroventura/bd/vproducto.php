<?php

class vproducto {
    private $idproducto;
    private $nombre;
    private $descripcion;
    private $precio_venta;
    private $estado;

    public function __construct($idproducto, $nombre, $descripcion, $unidad_medida, $precio_venta,$estado) {
        $this->idproducto = $idproducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->unidad_medida = $unidad_medida;
        $this->precio_venta = $precio_venta;
        $this->estado=$estado;

    public function getIdproducto() {
        return $this->idproducto;
    }

    public function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getUnidad_medida() {
        return $this->unidad_medida;
    }

    public function setUnidad_medida($unidad_medida) {
        $this->unidad_medida = $unidad_medida;
    }

    public function getPrecio_venta() {
        return $this->precio_venta;
    }

    public function setPrecio_venta($precio_venta) {
        $this->precio_venta = $precio_venta;
    } 
        
     public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
}


?>