<?php
class Detallecon_Bean{

    private $codDCont;
    private $costoUnitario;
    private $costoTotal;
    private $igv;
    private $codServicio;
    private $codContrato;
    
    function __construct($codDCont,$costoUnitario,$costoTotal,$igv,$codServicio,$codContrato){
        $this->codDCont = $codDCont;
        $this->costoUnitario = $costoUnitario;
        $this->costoTotal = $costoTotal;
        $this->igv = $igv;
        $this->codServicio = $codServicio;
        $this->codContrato = $codContrato;
    }

    public function getcodCont(){
        return $this->codDCont;
    }

    public function setcodCont($codDCont){
        return $this->codDCont=$codDCont;
    }

    public function getCostU(){
        return $this->costoUnitario;
    }

    public function setCostU($costoUnitario){
        return $this->costoUnitario=$costoUnitario;
    }

    public function getCostT(){
        return $this->costoTotal;
    }

    public function setCostT($costoTotal){
        return $this->costoTotal=$costoTotal;
    }

    public function getIGV(){
        return $this->igv;
    }

    public function setIGV($igv){
        return $this->igv=$igv;
    }

    public function getcodServ(){
        return $this->codServicio;
    }

    public function setcodServ($codServicio){
        return $this->codServicio=$codServicio;
    }

    public function getContrato(){
        return $this->codContrato;
    }

    public function setContrato($codContrato){
        return $this->codContrato=$codContrato;
    }

}