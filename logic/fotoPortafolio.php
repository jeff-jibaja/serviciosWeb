
 <?php
     include '../cado/cado.php';

    class FotoPortafolio 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarFPort($p){
            $sql_contrato = "INSERT INTO `fotoportafolio` (`codFPort`, `foto`, `portafolio`) VALUES (NULL, ?,?) "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarFPort($p){
            $sql_contrato = "DELETE FROM `fotoportafolio` WHERE `perfil`.`id`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarFPort($p){
            $sql_contrato = "UPDATE `fotoportafolio` SET `foto` = ?, 
                                                         `portafolio` =  ?
                                                   WHERE `fotoportafolio`.`codFPort` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarFPort(){
            $sql_contrato = "SELECT * FROM `fotoportafolio`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }