
 <?php
     include '../cado/cado.php';

    class DetalleCon 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarDetalleC($p){
            $sql_contrato = "INSERT INTO `detallecon` (`codDCon`, `costoUnitario`, `costoTotal`, `igv`, `servicio`, `cont`) VALUES (NULL, ?, ?, ?, ?, ?) "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarDetalleC($p){
            $sql_contrato = "DELETE FROM `detallecon` WHERE `detallecon`.`codDCon`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarDetalleC($p){
            $sql_contrato = "UPDATE `detallecon` SET `costoUnitario` = ?, 
                                                 `costoTotal` =  ?, 
                                                  `igv` = ?, 
                                                  `servicio` =  ?, 
                                                  `cont` = ?
                                                   WHERE `detallecon`.`codDCon` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarDetalleC(){
            $sql_contrato = "SELECT * FROM `detallecon`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }