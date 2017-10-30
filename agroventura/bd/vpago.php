<?php

class vpago {
  private $idpago;
  private $idreserva;
  
  private $tipo_comprobante;
  private $num_comprobante;
 
  private $total_pagar;
  private $fecha_comprobacion;
  private $fecha_pago;
  private $abono;
  private $estado;

    public function __construct($idpago, $idreserva,  $tipo_comprobante, $num_comprobante,  $total_pagar, $fecha_comprobacion, $fecha_pago,$abono,$estado) {
        $this->idpago = $idpago;
        $this->idreserva = $idreserva;
       
        $this->tipo_comprobante = $tipo_comprobante;
        $this->num_comprobante = $num_comprobante;
   
        $this->total_pagar = $total_pagar;
        $this->fecha_comprobacion = $fecha_comprobacion;
        $this->fecha_pago = $fecha_pago;
        $this->abono=$abono;
        $this->estado=$estado;
    
    }

  

    public function getIdpago() {
        return $this->idpago;
    }

    public function setIdpago($idpago) {
        $this->idpago = $idpago;
    }

    public function getIdreserva() {
        return $this->idreserva;
    }

    public function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }

    public function getTipo_comprobante() {
        return $this->tipo_comprobante;
    }

    public function setTipo_comprobante($tipo_comprobante) {
        $this->tipo_comprobante = $tipo_comprobante;
    }

    public function getNum_comprobante() {
        return $this->num_comprobante;
    }

    public function setNum_comprobante($num_comprobante) {
        $this->num_comprobante = $num_comprobante;
    }

   

    public function getTotal_pagar() {
        return $this->total_pagar;
    }

    public function setTotal_pagar($total_pagar) {
        $this->total_pagar = $total_pagar;
    }

    public function getFecha_comprobacion() {
        return $this->fecha_comprobacion;
    }

    public function setFecha_comprobacion($fecha_comprobacion) {
        $this->fecha_comprobacion = $fecha_comprobacion;
    }

    public function getFecha_pago() {
        return $this->fecha_pago;
    }

    public function setFecha_pago($fecha_pago) {
        $this->fecha_pago = $fecha_pago;
    } 
    
     public function getAbono() {
        return $this->abono;
    }

    public function setAbono($abono) {
        $this->abono = $abono;
    } 
     public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    } 
}

?>