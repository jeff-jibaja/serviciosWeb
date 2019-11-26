<?php

session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

if(isset($_GET['nom']) != null || isset($_GET['nom']) == "" ){
     $nom =   $_GET['nom'];
}else if(isset($_GET['app']) != null || isset($_GET['app']) == "" ){
    $app =   $_GET['app'];
        
}else if(isset($_GET['apm']) != null || isset($_GET['apm']) == "" ){
    $apm =   $_GET['apm'];
}else if(isset($_GET['cat']) != null || isset($_GET['cat']) == "" ){
    $cat =   $_GET['cat'];
}else if(isset($_GET['serv']) != null || isset($_GET['serv']) == "" ){
    $serv =   $_GET['serv'];
}else if(isset($_GET['tel']) != null || isset($_GET['tel']) == "" ){
    $tel =   $_GET['tel'];
}else if(isset($_GET['dir']) != null || isset($_GET['dir']) == "" ){
    $dir =   $_GET['dir'];
}else if(isset($_GET['des']) != null || isset($_GET['des']) == "" ){
    $des =   $_GET['des'];
}else if(isset($_GET['term']) != false  ){
    $term =   $_GET['term'];
}else{
    
}