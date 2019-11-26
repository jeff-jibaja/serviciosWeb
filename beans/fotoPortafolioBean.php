<?php
class FotoPortafolio_Bean
{
    private $codFoto;
    private $foto;
    private $codPort;

    function __construct($codFoto,$foto,$codPort){
        $this->codFoto = $codFoto;
        $this->foto = $foto;
        $this->codPort = $codPort;
    }

    public function getcodFot(){
        return $this->codFoto;
    }

    public function setcodFot($codFoto){
        return $this->codFoto=$codFoto;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        return $this->foto=$foto;
    }

    public function getPortafolio(){
        return $this->codPort;
    }

    public function setPortafolio($codPort){
        return $this->codPort=$codPort;
    }
}