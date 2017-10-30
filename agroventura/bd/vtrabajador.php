<?php

include "vpersona.php";

class vtrabajador extends vpersona{
    private $idpersona;
    private $estado;
    private $rango;
    private $codigo;
    

    public function __construct($idpersona,$estado,$rango,$codigo) {
        $this->idpersona = $idpersona;
        $this->estado = $estado;
        $this->rango=$rango;
        $this->codigo=$codigo;
        
    }

    public function getIdpersona() {
        return $this->idpersona;
    }

    public function setIdpersona($idpersona) {
        $this->idpersona = $idpersona;
    }


    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
     public function getRango() {
        return $this->rango;
    }

    public function setRango($rango) {
        $this->rango = $rango;
    }
     public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
}


?>