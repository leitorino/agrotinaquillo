<?php

class vconsumo_entrada {
    
    private $idconsumo_entrada;
    private $total_pagar;
    private $estado;
    private $idreserva;
    private $idreserva_plan;
    private $identrada;

    public function __construct($idconsumo_entrada, $total_pagar, $estado, $idreserva, $idreserva_plan, $identrada) {
        $this->idconsumo_entrada = $idconsumo_entrada;
        $this->total_pagar = $total_pagar;
        $this->estado = $estado;
        $this->idreserva = $idreserva;
        $this->idreserva_plan = $idreserva_plan;
        $this->identrada = $identrada;
    }

    public function getIdconsumo_entrada() {
        return $this->idconsumo_entrada;
    }

    public function setIdconsumo_entrada($idconsumo_entrada) {
        $this->idconsumo_entrada = $idconsumo_entrada;
    }

    public function getIdreserva() {
        return $this->idreserva;
    }

    public function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }

    public function getIdentrada() {
        return $this->identrada;
    }

    public function setIdentrada($identrada) {
        $this->identrada = $identrada;
    }

    public function getIdreserva_plan() {
        return $this->idreserva_plan;
    }

    public function setIdreserva_plan($idreserva_plan) {
        $this->idreserva_plan = $idreserva_plan;
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

    
}


?>