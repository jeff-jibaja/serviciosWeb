<?php
class Resena_Bean{

    private $codResena;
    private $desRe;
    private $puntaje;
    private $codDetalle;

    function __construct($codResena,$desRe,$puntaje,$codDetalle){
        $this->codResena = $codResena;
        $this->desRe = $desRe;
        $this->puntaje = $puntaje;
        $this->codDetalle = $codDetalle;
    }

    public function getcodRes(){
        return $this->codResena;
    }

    public function setcodRes($codResena){
        return $this->codResena=$codResena;
    }

    public function getDesc(){
        return $this->desRe;
    }

    public function setDesc($desRe){
        return $this->desRe=$desRe;
    }

    public function getPuntaje(){
        return $this->puntaje;
    }

    public function setPuntaje($puntaje){
        return $this->puntaje=$puntaje;
    }

    public function getcodDet(){
        return $this->codDetalle;
    }

    public function setcodDet($codDetalle){
        return $this->codDetalle=$codDetalle;
    }
}