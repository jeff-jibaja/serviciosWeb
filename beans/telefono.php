<?php
class Telefono_Bean{

    private $codTel;
    private $numTel;
    private $tipo;

    function __construct($codTel,$numTel,$tipo){
        $this->codTel = $codTel;
        $this->numTel = $numTel;
        $this->tipo = $tipo;
    }

    public function getcodTel(){
        return $this->codTel;
    }

    public function setcodTel($codTel){
        return $this->codTel=$codTel;
    }

    
    public function getServ(){
        return $this->numTel;
    }

    public function setServ($numTel){
        return $this->numTel=$numTel;
    }

    
    public function getTipoS(){
        return $this->tipo;
    }

    public function setTipoS($tipo){
        return $this->tipo=$tipo;
    }
}