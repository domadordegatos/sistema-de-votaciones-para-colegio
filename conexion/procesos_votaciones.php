<script type="text/javascript">
function enviar_voto(){
  if ($('input[name=radio-control]:checked').length > 0) {
    var fm1 = $('input[name="radio-control"]:checked').val();
    cadena="form1=" + fm1;
    $.ajax({
      type:"POST",
      url:"../../controller/envio_voto.php", //validacion de datos de registro
      data:cadena,
      success:function(r){
        if(r==1){
          $('.image_radio_button_control').hide(0);
          $('.bajo').show(500);
          setTimeout ("location.reload();", 10000); //falta mensaje de entrada
         }else{
          console.log("no funciona el registro");
        }
      }
    });
  }
}
</script>
