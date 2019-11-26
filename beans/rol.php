<?php
class Rol_Bean{

    private $codRol;
    private $nomRol;
    private $vista;

    function __construct($codRol,$nomRol,$vista){
        $this->codRol = $codRol;
        $this->nomRol = $nomRol;
        $this->vista = $vista;
    }

    public function getcodRol(){
        return $this->codRol;
    }

    public function setcodRol($codRol){
        return $this->codRol=$codRol;
    }

    public function getRol(){
        return $this->nomRol;
    }

    public function setRol($nomRol){
        return $this->nomRol=$nomRol;
    }


    public function getcodVista(){
        return $this->vista;
    }

    public function setcodVista($vista){
        return $this->vista=$vista;
    }


}