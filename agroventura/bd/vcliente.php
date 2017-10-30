<?php

include "vpersona.php";

class vcliente extends vpersona{
    private $idpersona;
    private $pregunta_seguridad;
    private $respuesta_seguridad;
    private $pregunta_seguridad2;
    private $respuesta_seguridad2;
    private $estado;

    public function __construct( $idpersona,$pregunta_seguridad,$respuesta_seguridad,$pregunta_seguridad2,$respuesta_seguridad2,$estado) {
        $this->idpersona = $idpersona;
        $this->pregunta_seguridad = $pregunta_seguridad;
        $this->respuesta_seguridad = $respuesta_seguridad;
        $this->pregunta_seguridad2 = $pregunta_seguridad2;
        $this->respuesta_seguridad2 = $respuesta_seguridad2;
        $this ->estado=$estado;
    }
public function getIdpersona() {
        return $this->idpersona;
    }

    public function setIdpersona($idpersona) {
        $this->idpersona = $idpersona{;
    } 
    public function getPregunta_seguridad() {
        return $this->pregunta_seguridad;
    }

    public function setPregunta_seguridad($pregunta_seguridad) {
        $this->pregunta_seguridad = $pregunta_seguridad;
    }   
    
    public function getRespuesta_seguridad() {
        return $this->respuesta_seguridad;
    }

    public function setRespuesta_seguridad($respuesta_seguridad) {
        $this->respuesta_seguridad = $respuesta_seguridad;
    } 
    
    public function getPregunta_seguridad2() {
        return $this->pregunta_seguridad2;
    }

    public function setPregunta_seguridad2($pregunta_seguridad2) {
        $this->pregunta_seguridad2 = $pregunta_seguridad2;
    }   
    
    public function getRespuesta_seguridad2() {
        return $this->respuesta_seguridad2;
    }

    public function setRespuesta_seguridad2($respuesta_seguridad2) {
        $this->respuesta_seguridad2 = $respuesta_seguridad2;
    }
    
    
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}

?>