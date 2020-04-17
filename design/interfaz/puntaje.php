<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php require_once "../../conexion/conexion.php";
    $conexion=conexion(); ?>
    <meta charset="utf-8">
    <title>Puntaje personero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body onload="recargar();" style="width: 100; background: linear-gradient(to right, rgba(146,116,170,1) 0%, rgba(49,11,81,1) 100%);">
    <div class="container" style="display:flex;">
      <div class="izquierda" style="width:50%; padding-top:5%;">
        <h1 class="text-white">Tabla de votos marcados :D <img src="../images/load.gif" width="40px;"> </h1><br>
          <table class="table table-bordered table-sm text-white">
            <tr>
              <td style="text-align:center;">Candidatos</td>
              <td style="text-align:center;">Votos</td>
            </tr>
           <tr>
             <td>
               <img id="candi" src="../images/01.jpg">
               <label>01 Sara Sofia Uscategui Reina</label>
             </td>
             <?php $sql="SELECT COUNT(votante) FROM votos WHERE votante='2'"; $result=mysqli_query($conexion,$sql);
               $ver1=mysqli_fetch_row($result);?>
             <?php $sql="SELECT COUNT(votante) FROM votos WHERE votante='1'"; $result=mysqli_query($conexion,$sql);
               $ver=mysqli_fetch_row($result);?>
             <td style="text-align:center; <?php if($ver[0]>$ver1[0]){ echo "background-color: green;";}else{ echo "background-color: red;";} ?>"><?php echo $ver[0]; ?></td>
           </tr>
           <tr>
             <td>
               <img id="candi" src="../images/02.jpg">
               <label>02 William Andres Rocha Porras</label>
             </td>
             <td style="text-align:center; <?php if($ver[0]<$ver1[0]){ echo "background-color: green;";}else{ echo "background-color: red;";} ?>"><?php echo $ver1[0]; ?></td>
           </tr>
           <tr>
             <td>
               <img id="candi" src="../images/000.jpg">
               <label>Voto en Blanco</label>
             </td>
             <?php $sql="SELECT COUNT(votante) FROM votos WHERE votante='3'"; $result=mysqli_query($conexion,$sql);
               $ver2=mysqli_fetch_row($result);?>
             <td style="text-align:center;"><?php echo $ver2[0]; ?></td>
           </tr>
           <tr>
             <?php $sql="SELECT COUNT(votante) FROM votos"; $result=mysqli_query($conexion,$sql);
               $ver3=mysqli_fetch_row($result);?>
             <td style="text-align:right;" colspan="2">Cantidad de votos: <?php echo $ver3[0]; ?></td>
           </tr>
          </table>
      </div>
      <div class="derecha" style="width:50%; padding-top:5%; text-align:center;">
            <img src="../images/logo.png" alt="" width="70%;" style="margin-left:7rem;">
      </div>
    </div>

  </body>
</html>
<script type="text/javascript">
  function recargar(){
    setTimeout ("location.reload();", 5000);
  }
</script>
 <style media="screen">
   #candi{
     width: 4rem;
     border: rgb(255, 255, 255) solid 2px;
   }
   label{
     color:white;
   }
   th{
     display: grid;
   }
 </style>
