<?php

class vreserva {
    private $idreserva;
    private $idcliente;
    private $fecha_reserva;
    private $fecha_ingreso;
    private $fecha_salida;
    private $estado;

    public function __construct($idreserva, $idcliente, $idtrabajador, $fecha_reserva, $fecha_ingreso, $fecha_salida,$estado) {
        $this->idreserva = $idreserva;
        
        $this->idcliente = $idcliente;
        $this->idtrabajador = $idtrabajador;
        $this->fecha_reserva = $fecha_reserva;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->fecha_salida = $fecha_salida;
        $this->estado = $estado;
    }


    public function getIdreserva() {
        return idreserva;
    }

    public function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }

  

    public function getIdcliente() {
        return idcliente;
    }

    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    public function getIdtrabajador() {
        return idtrabajador;
    }

    public function setIdtrabajador($idtrabajador) {
        $this->idtrabajador = $idtrabajador;
    }


    public function getFecha_reserva() {
        return fecha_reserva;
    }

    public function setFecha_reserva($fecha_reserva) {
        $this->fecha_reserva = $fecha_reserva;
    }

    public function getFecha_ingreso() {
        return fecha_ingreso;
    }

    public function setFecha_ingreso($fecha_ingreso) {
        $this->fecha_ingreso = $fecha_ingreso;
    }

    public function getFecha_salida() {
        return fecha_salida;
    }

    public function setFecha_salida($fecha_salida) {
        $this->fecha_salida = $fecha_salida;
    }

  

    public function getEstado() {
        return estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }  
    
}

?>