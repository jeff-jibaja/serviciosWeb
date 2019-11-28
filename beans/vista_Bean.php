<?php
class vista_Bean{

    private $codVsta;
    private $noVista;
    private $ruta;

    function __construct($codVsta,$noVista,$ruta){
        $this->codVsta = $codVsta;
        $this->noVista = $noVista;
        $this->ruta = $ruta;
    }

    public function getcodVista(){
        return $this->codVsta;
    }

    public function setcodVista($codVsta){
        return $this->codVsta=$codVsta;
    }

    public function getVista(){
        return $this->noVista;
    }

    public function setVista($noVista){
        return $this->noVista=$noVista;
    }

    public function getRuta(){
        return $this->ruta;
    }

    public function setRuta($ruta){
        return $this->ruta=$ruta;
    }
}