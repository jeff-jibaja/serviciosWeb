
 <?php
     include '../cado/cado.php';

    class Vistas 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarVistas($p){
            $sql_contrato = "INSERT INTO `vistassistem` (`idvista`, `nomvista`, `ruta`) VALUES (NULL, ?, ?) "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarVistas($p){
            $sql_contrato = "DELETE FROM `vistassistem` WHERE `vistassistem`.`idvista`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarVistas($p){
            $sql_contrato = "UPDATE `vistassistem` SET `nomvista` = ?, 
                                                        `ruta` =  ?
                                                   WHERE `vistassistem`.`idvista` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarVistas(){
            $sql_contrato = "SELECT * FROM `vistassistem`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }