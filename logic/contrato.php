
 <?php
     include '../cado/cado.php';

    class Contrato 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarCont($p){
            $sql_contrato = "INSERT INTO `contrato` (`codContrato`, `fecha`, `direccion`, `referencia`, `codPerfil`, `cliente`) VALUES (NULL, ?,?, ?, ?, ?) "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarCont($p){
            $sql_contrato = "DELETE FROM `contrato` WHERE `contrato`.`codContrato` = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarCont($p){
            $sql_contrato = "UPDATE `contrato` SET `fecha` = ?, 
                                                   `direccion` = ? 
                                                   `referencia` = ?,
                                                   `codPerfil` = ?,
                                                   `cliente` = ?
                                                WHERE `contrato`.`codContrato` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarCont(){
            $sql_contrato = "SELECT * from contrato"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }
    