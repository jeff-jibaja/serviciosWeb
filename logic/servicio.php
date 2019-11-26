
 <?php
     include '../cado/cado.php';

    class Servicio 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarServ($p){
            $sql_contrato = "INSERT INTO `servicio` (`codServicio`, `nomServicio`, `tipoServicio`) VALUES (NULL, ?, ?)  "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarServ($p){
            $sql_contrato = "DELETE FROM `servicio` WHERE `servicio`.`codServicio`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarServ($p){
            $sql_contrato = "UPDATE `servicio` SET `nomServicio` = ?, 
                                                 `tipoServicio` =  ?
                                             WHERE `codServicio`.`codServicio` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarServ(){
            $sql_contrato = "SELECT * FROM `servicio`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }