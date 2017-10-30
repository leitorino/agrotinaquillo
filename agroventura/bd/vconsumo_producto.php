<?php

class vconsumo_producto {
 private $idconsumo_producto;
 private $idreserva;
 private $idproducto;
 private $cantidad;
 private $precio_venta;
 private $estado;

    public function __construct($idconsumo_producto, $idreserva, $idproducto, $cantidad, $precio_venta, $estado) {
        $this->idconsumo_producto = $idconsumo_producto;
        $this->idreserva = $idreserva;
        $this->idproducto = $idproducto;
        $this->cantidad = $cantidad;
        $this->precio_venta = $precio_venta;
        $this->estado = $estado;
    }

    public function getIdconsumo_producto() {
        return $this->idconsumo_producto;
    }

    public function setIdconsumo_producto($idconsumo_producto) {
        $this->idconsumo_producto = $idconsumo_producto;
    }

    public function getIdreserva() {
        return $this->idreserva;
    }

    public function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }

    public function getIdproducto() {
        return $this->idproducto;
    }

    public function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
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