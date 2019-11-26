
 <?php
     include '../cado/cado.php';

    class Telefono 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarTelef($p){
            $sql_contrato = "INSERT INTO `telefono` (`codTel`, `numTelefono`, `codPerfil`) VALUES (NULL, ?, ?) "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarTelef($p){
            $sql_contrato = "DELETE FROM `telefono` WHERE `telefono`.`codTel`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarTelef($p){
            $sql_contrato = "UPDATE `telefono` SET `numTelefono` = ?, 
                                                 `codPerfil` =  ?
                                                   WHERE `telefono`.`codTel` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarTelef(){
            $sql_contrato = "SELECT * FROM `telefono`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }