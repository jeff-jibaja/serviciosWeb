<?php
class DesServicio_Bean 
{

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

    public function getDescricpcion(){
        return $this->descripcion;
    }

    public function setDescricpcion($descripcion){
        return $this->descripcion=$descripcion;
    }

    public function getcodDetalle(){
        return $this->codDetalle;
    }

    public function setcodDetalle($codDetalle){
        return $this->codDetalle=$codDetalle;
    }


}