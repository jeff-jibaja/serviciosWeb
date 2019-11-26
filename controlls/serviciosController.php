<?php

/*include '../logic/servicios.php';


    $ser  = new Servicios();
    
     $list = $ser->ListarTipoS();

   foreach ($list as $lista) {
       echo $lista['modalidad'];
   }



   include '../logic/perfil.php';
   
   $ser  = new Perfil();

   //$param=['tony', 'garcia', 'jibaja', 'pulpin@gmail.com', 'la pradera', 'foto.png', '1999-01-01',3];
    
    $list = $ser->ListarPerfil();

    foreach ($list as $lista) {
        echo $lista['nombre'];
    }

*/
    
include '../logic/desServicio.php';

$ser  = new DesServicio();
    
$param=['prueba de insercion de servcicios desde clases php', 1];

echo $list = $ser->insertarDesServ($param);