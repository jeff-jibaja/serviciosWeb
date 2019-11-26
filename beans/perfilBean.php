<?php

 class Perfil_Bean 
 {
    protected $id;    
    protected $_nom;
    private $app;
    private $apm;
    private $correo;
    private $dir;
    private $foto;
    private $fecha;


    function __construct($id,$nom,$app,$apm,$correo,$dir,$foto,$fecha){
        $this->id = $id;
        $this->nom = $nom;
        $this->app = $app;
        $this->apm = $apm;
        $this->correo = $correo;
        $this->dir = $dir ;
        $this->foto = $foto ;
        $this->fecha = $fecha ;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }  

    public function getApp(){
        return $this->app;
    }

    public function getApm(){
        return $this->apm;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getDireccion(){
        return $this->dir;
    }

    public function getFoto(){
        return $this->fot;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setNom($nom){
        return $this->nom = $nom;
    }

    public function setApp($app){
        return $this->app = $app;
    }

    public function setApm($apm){
        return $this->apm = $apm;
    }

    public function setCorreo($correo){
        return $this->correo=$correo;
    }

    public function setDireccion($dir){
        return $this->dir=$dir;
    }

    public function setFoto($foto){
        return $this->fot=$foto;
    }

    public function setFecha($fecha){
        return $this->fecha = $fecha;
    }

    public function setId($id){
        return $this->id = $id;
    }

 }
 
