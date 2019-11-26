<?php
class Servicio_Bean{

    private $codServ;
    private $nomServ;
    private $tipo;

    function __construct($codServ,$nomServ,$tipo){
        $this->codServ = $codServ;
        $this->nomServ = $nomServ;
        $this->tipo = $tipo;
    }

    public function getcodServ(){
        return $this->codServ;
    }

    public function setcodServ($codServ){
        return $this->codServ=$codServ;
    }

    
    public function getServ(){
        return $this->nomServ;
    }

    public function setServ($nomServ){
        return $this->nomServ=$nomServ;
    }

    
    public function getTipoS(){
        return $this->tipo;
    }

    public function setTipoS($tipo){
        return $this->tipo=$tipo;
    }
}