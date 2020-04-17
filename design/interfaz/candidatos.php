<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vota por tu candidato</title>
    <link rel="stylesheet" href="../style.css">
    <?php require_once "../../conexion/procesos_votaciones.php"; ?>
    <script type="text/javascript" src="../../conexion/jquery-3.4.1.js"></script>
  </head>
  <body style="width:100%; margin:0;padding:0;">
    <div class="container" style="text-align:center;">
      <div class="super" style="width:100%; text-align:-webkit-center; padding: 0.5% 0 0 0;">
             <h1 style="color:white; font-size:3rem; border:2px solid white; width:43%; border-radius:30px;">CSMA PERSONERO 2020</h1>
      </div>
      <div class="options">
        <div class="image_radio_button_control" onclick="enviar_voto();">
          <div class="control">
            <label class="radio-button-label" style="width:100%;">
              <input type="radio" name="radio-control" value="1" />
              <img src="../images/01.jpg" style="width:57%;">
              <h1 style="top:43%; left: 13%; position: absolute; color: white;border: solid white 4px; width:1.4rem; border-radius:45px; padding: 1.5%; padding-right: 3%; font-size: 2.5rem;background-color:rgb(255, 0, 57);">01</h1>
            </label>
            <div class="recuadro" style="margin-top:14%;">
              <label style="font-size:1.5rem;">Sara Sofia Uscategui Reina</label>
            </div>
          </div>

          <div class="control">
            <label class="radio-button-label" style="width:100%;">
              <input type="radio" name="radio-control" value="2"/>
              <img src="../images/02.jpg" style="width:57%;">
              <h1 style="top:43%; left: 46.5%; position: absolute; color: white;border: solid white 4px; width:1.4rem; border-radius:45px; padding: 1.5%; padding-right: 3%; font-size: 2.5rem;background-color:rgb(0, 64, 205);">02</h1>
            </label>
            <div class="recuadro" style="margin-top:14%;">
              <!-- <h1 style="background-color:rgb(0, 64, 205);color: white;border:white solid 2px; width:2.4rem; border-radius:40px; padding: 4.5%; padding-right: 6%; font-size: 2.5rem;">02</h1> -->
              <label style="font-size:1.5rem;">William Andres Rocha Porras</label>
            </div>
          </div>

          <div class="control">
          <label class="radio-button-label" style="width:100%;">
            <input type="radio" name="radio-control" value="3" />
            <img src="../images/000.jpg" style="width:57%;">
            <h1 style="top:43%; left: 80%; position: absolute; color: black;border: solid black 4px; width:1.4rem; border-radius:45px; padding: 1.5%; padding-right: 3%; font-size: 2.5rem;background-color:white;">00</h1>
          </label>
          <div class="recuadro" style="margin-top:14%;">
            <!-- <h1 style="background-color: white; border: solid 2px; width:2.4rem; border-radius:40px; padding: 4.5%; padding-right: 6%; font-size: 2.5rem;">00</h1> -->
            <label style="font-size:1.5rem;">Voto en Blanco</label>
          </div>
          </div>
        </div>
      </div>

      <div class="bajo" style="width:100%; display:none;padding-top:2%;">
        <img src="../images/ya_vote.png" style="width:60%;border-radius:10%;">
      </div>
    </div>

  </body>
</html>
