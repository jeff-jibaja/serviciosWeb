<?php
class Contrato_Bean 
{

    private $codContrato;
    private $fecha;
    private $direccion;
    private $referencia;
    private $codPerfil;
    private $cliente;


    
    function __construct($codContrato,$fecha,$direccion,$referencia,$codPerfil,$cliente){
        $this->codContrato = $codContrato;
        $this->fecha = $fecha;
        $this->direccion = $direccion;
        $this->referencia = $referencia;
        $this->codPerfil = $codPerfil;
        $this->cliente = $cliente ;
    }

    public function getcodCont(){
        return $this->codContrato;
    }

    public function setcodCont($codContrato){
        return $this->codContrato=$codContrato;
    }

    public function getFecha(){
        return $this->fecha;
    }  

    public function setFecha($fecha){
        return $this->fecha=$fecha;
    }
    
    public function getDireccion(){
        return $this->direccion;
    }  

    public function setDireccion($direccion){
        return $this->direccion=$direccion;
    }

    public function getRef(){
        return $this->referencia;
    }  

    public function setRef($referencia){
        return $this->referencia=$referencia;
    }

    public function getcodPerfil(){
        return $this->codPerfil;
    }  

    public function setcodPerfil($codPerfil){
        return $this->codPerfil=$codPerfil;
    }

    public function getCliente(){
        return $this->cliente;
    }  

    public function setCliente($cliente){
        return $this->cliente=$cliente;
    }

    
}
