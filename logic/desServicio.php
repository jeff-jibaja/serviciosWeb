
 <?php
     include '../cado/cado.php';

    class DesServicio 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarDesServ($p){
            $sql_contrato = "INSERT INTO `desservicio` (`codDesServ`, `desSer`, `codDetalleCont`) VALUES (NULL, ?, ?)   "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarDesServ($p){
            $sql_contrato = "DELETE FROM `perfil` WHERE `perfil`.`id`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarDesServ($p){
            $sql_contrato = "UPDATE `perfil` SET `nombre` = ?, 
                                                 `apellidoPat` =  ?, 
                                                  `apellidoMat` = ?, 
                                                  `correo` =  ?, 
                                                  `direccion` = ?, 
                                                  `foto` = ?, 
                                                  `fechaNac` = ? 
                                                   WHERE `perfil`.`id` = ? "; 
            $param = $p;
            return  $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function ListarDesServ(){
            $sql_contrato = "SELECT * FROM `perfil`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }