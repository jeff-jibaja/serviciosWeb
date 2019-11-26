
 <?php
     include '../cado/cado.php';

    class Perfil 
    {
        private $cado ;
        private $cd;
        private $res;

        function __construct(){
            $this->cado = new Cado();
        }

        public function insertarPerfil($p){
            $sql_contrato = "INSERT INTO `perfil` (`id`, `nombre`, `apellidoPat`, `apellidoMat`, `correo`, `direccion`, `foto`, `fechaNac`)
                             VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)  "; 
            $param = $p;
           return $this->res = $this->cd = $this->cado->insert_update($sql_contrato,$param) == 1 ? 'exito' : 'error' ;                
           
        }

        public function EliminarPerfil($p){
            $sql_contrato = "DELETE FROM `perfil` WHERE `perfil`.`id`  = ?"; 
            $param = $p;
            return $this->res = $this->cd = $this->cado->delete($sql_contrato,$param) == 1 ? 'exito' : 'error' ;             
        }

        public function EditarPerfil($p){
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

        public function ListarPerfil(){
            $sql_contrato = "SELECT * FROM `perfil`"; 
            return $this->res = $this->cd = $this->cado->list($sql_contrato) ;             
        }
    }