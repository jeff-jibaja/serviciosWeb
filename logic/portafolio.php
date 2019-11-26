
 <?php
     include '../cado/cado.php';

    class Portafolio 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarPortaf($p){
            $sql_contrato = "INSERT INTO `portafolio` (`codPortafolio`, `descripcion`, `direccion`, `codPerfil`) VALUES (NULL, ?, ?, ?)"; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarPortaf($p){
            $sql_contrato = "DELETE FROM `portafolio` WHERE `perfil`.`id`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarPortaf($p){
            $sql_contrato = "UPDATE `portafolio` SET `descripcion` = ?, 
                                                 `direccion` =  ?, 
                                                  `codPerfil` = ?
                                                   WHERE `portafolio`.`codPortafolio` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarPortaf(){
            $sql_contrato = "SELECT * FROM `portafolio`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }