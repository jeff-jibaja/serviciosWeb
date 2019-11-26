
 <?php
     include '../cado/cado.php';

    class Servicios 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarTipoS($p){
            $sql_tipoSer = "INSERT INTO `tiposervicio` (`codTipoS`, `nomTipoS`, `modalidad`) VALUES (NULL, ?, ?)"; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_tipoSer,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarTipoS($p){
            $sql_tipoSer = "DELETE FROM `tiposervicio` WHERE `tiposervicio`.`codTipoS` = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_tipoSer,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarTipoS($p){
            $sql_tipoSer = "UPDATE `tiposervicio` SET `nomTipoS` = ?, `modalidad` = ? WHERE `tiposervicio`.`codTipoS` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_tipoSer,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarTipoS(){
            $sql_tipoSer = "SELECT * from tiposervicio"; 
            return $this->res = $this->cd = $this->cado->list($sql_tipoSer) ;             
        }
    }
    