<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title></title>
  </head>
  <body>

    <!-- formulario  -->
    <br><br>
    <form action="<?php echo site_url('Subir/cargar');?>" method="post" enctype="multipart/form-data">
       <input type="file" name="imagenes[]" multiple>
       <br><br><br>
       <button type="submit">Subir Imágenes</button>
  </form>
  <br>
  <a href="<?php echo site_url();?>">regresar</a>

      </body>
</html>
