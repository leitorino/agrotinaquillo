<?php

class vconsumo_entrada {
  private $idconsumo_entrada;
  private $idreserva;
  private $general;
  private $niños;
  private $3edad;
  private $exonerado;
  private $total_pagar;
  private $tipo_precio;
  private $tipo_caney;    
  private $estado;

    public function __construct($idconsumo_entrada,$idreserva,  $general, $niños, $3edad, $exonerado,  $total_pagar,$tipo_precio,$tipo_caney, $estado) {
        $this->idconsumo_entrada=$idconsumo_entrada;
        $this->idreserva = $idreserva;
        
        $this->general = $general;
        $this->niños = $niños;
        $this->3edad = $3edad;
        $this->exonerado = $exonerado;
        $this->total_pagar = $total_pagar;
        $this->tipo_precio=$tipo_precio;
        $this->tipo_caney=$tipo_caney;
        $this->estado = $estado;
    }
 public function getIdconsumo_entrada() {
        return $this->idconsumo_entrada;
    }

    public function setIdconsumo_entrada($idconsumo_entradas) {
        $this->idconsumo_entrada = $idconsumo_entrada;
    }
    public function getIdreserva() {
        return $this->idreserva;
    }

    public function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }  

  

    public function getGeneral() {
        return $this->general;
    }

    public function setGeneral($general) {
        $this->general = $general;
    }

    public function getNiños() {
        return $this->niños;
    }

    public function setNiños($niños) {
        $this->niños = $niños;
    }

    public function get3Edad() {
        return $this->3edad;
    }

    public function set3Edad($3edad) {
        $this->3edad = $3edad;
    }

    public function getExonerado() {
        return $this->exonerado;
    }

    public function setExonerado($exonerado) {
        $this->exonerado = $exonerado;
    }

   

    public function getTotal_pagar() {
        return $this->total_pagar;
    }

    public function setTotal_pagar($total_pagar) {
        $this->total_pagar = $total_pagar;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
 public function getTipo_precio() {
        return $this->tipo_precio;
    }

    public function setTipo_precio($tipo_precio) {
        $this->tipo_precio = $tipo_precio;
    }
       
     public function getTipo_caney() {
        return $this->tipo_caney;
    }

    public function setTipo_caney($tipo_caney) {
        $this->tipo_caney = $tipo_caney;
    }
}

?>