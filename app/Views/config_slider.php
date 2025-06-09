<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Configuraciones de Slider</h1>
    <form class="" action="<?php echo base_url();?>ProcesarConfig/procesar" method="post">
      Autoplay
      <br>
      <input type="radio" name="autoplay" value="1">
      <label for="true">True</label>
       <br>
      <input type="radio"  name="autoplay" value="0">
      <label for="false">False</label><br>
      <!-- /////////////////////////////// -->
      Navegacion
      <br>
      <input type="radio" name="nav" value="1">
      <label for="true">True</label>
       <br>
      <input type="radio"  name="nav" value="0">
      <label for="false">False</label><br>
      <input type="submit" name="" value="enviar">
  </form><br>
      <a href="<?php echo site_url();?>">regresar</a>
    </body>
</html>
