<?php

class votando{

  public function vote(){
     $v1=$_POST['form1'];
     require_once "conexion.php";
     $conexion=conexion();
     $sql="INSERT INTO votos VALUES ('', '$v1')";
     $result=mysqli_query($conexion,$sql);
                if($result){
                  echo 1;
                }else{
                  echo 0;
                }
  }
}
 ?>
