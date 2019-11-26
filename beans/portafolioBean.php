<?php
class Portafolio_Bean{

    private $codDesServ;
    private $descripcion;
    private $codDetalle;

    function __construct($codDesServ,$descripcion,$codDetalle){
        $this->codDesServ = $codDesServ;
        $this->descripcion = $descripcion;
        $this->codDetalle = $codDetalle;
    }

    public function getcodServ(){
        return $this->codDesServ;
    }

    public function setcodServ($codDesServ){
        return $this->codDesServ=$codDesServ;
    }
}