<?php
require_once "../conexion/conexion.php";
require_once "../conexion/votar.php";
$conexion=conexion();

    $obj= new votando();

    $result=$obj->vote();
 ?>
