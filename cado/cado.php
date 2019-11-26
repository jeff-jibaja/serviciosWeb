<?php
include '../data/Conexion.php';

class Cado {

    private $_conex;
    private $_con;
    private $ps;
    private $rs;
    private $val;

    function __construct(){      
        $_conex = new ConexionBD();
        $this->_con = $_conex->connect();
    }

    public function insert_update($sql,$param){               
                $this->ps = $this->_con->prepare($sql);       
                for( $i=0 ; $i<count($param) ; $i++){
                        switch ( $param[$i]) {
                            case is_integer($param[$i]):
                              $this->ps->bindParam($i+1,$param[$i],PDO::PARAM_INT);
                                break;             
                            case is_bool($param[$i]):
                                $this->ps->bindParam($i+1,$param[$i],PDO::PARAM_BOOL);
                                break;
                            case is_double($param[$i]):
                                $this->ps->bindParam($i+1,$param[$i]);
                                break;
                            case is_string($param[$i]):
                                $this->ps->bindParam($i+1,$param[$i],PDO::PARAM_STR);
                                break;
                            default:
                                return $ex->getMessage(); 
                                break;
                        }
                }
                $this->rs = $this->ps->execute();  
        return $this->rs;
    }

    public function delete($sql,$id){
        try {          
            $this->ps = $this->_con->prepare($sql);                  
            $this->rs =  $this->ps->bindValue(1,$id);
            $this->rs = $this->ps->execute();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        } 
         return $this->rs; 
    }

     public function buscar($sql,$param){
        try {     
            $this->ps = $this->_con->prepare($sql);             
            for( $i=0 ; $i<count($param) ; $i++){
                switch ( $param[$i]) {
                    case is_integer($param[$i]):
                    $this->ps->bindParam($i+1,$param[$i],PDO::PARAM_INT);
                        break;             
                    case is_bool($param[$i]):
                        $this->ps->bindParam($i+1,$param[$i],PDO::PARAM_BOOL);
                        break;
                    case is_double($param[$i]):
                        $this->ps->bindParam($i+1,$param[$i]);
                        break;
                    case is_string($param[$i]):
                        $this->ps->bindParam($i+1,$param[$i],PDO::PARAM_STR);
                        break;
                    default:
                        return $ex->getMessage(); 
                        break;
                }
            }
            $this->ps->execute();  
            $this->val = $this->ps->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
           return $ex->getMessage();
        } 
         return $this->val; 
     }

     public function list($sql){
        try {     
            $this->rs =  $this->_con->prepare($sql);
            $this->rs->execute();
            $this->val = $this->rs->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
           return $ex->getMessage();
        } 
         return $this->val; 
    }
}

