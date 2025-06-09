
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery BSC Slider Plugin Demos</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src=<?php echo base_url(); ?>assets/js/jquery.bscslider.js></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url();?>assets/css/jquery.bscslider.css/>
	<link rel="stylesheet" type="text/css" href=<?php  echo base_url(); ?>assets/css/main.css/>
</head>
<body>
   <!-- estilo de la vista principal  -->
	<style media="screen">
	body, html {
		background:  #16610E;
	}
	h1{
		color:  #F97A00;
	}
</style>

<!-- principal  -->
<div id="main">
	<h1>Slider de Imagenes </h1>
	<div class="slider slider2">

		<!-- buscando imagenes a la base de datos-->
		<?php helper('consulta_helper'); // Cargar el helper ?>
		<?php $imagenes = getImagenes(); ?>
		    <?php foreach ($imagenes as $img ): ?>
		        <div>
		            <img src="<?= base_url( $img->ruta) ?>" alt="Imagen" width="200">
		        </div>
		    <?php endforeach; ?>
		</div>
		<!-- validando las variables vacias que vienen de vista de configuraciones   -->
		 <?php
		   if (empty($autoplay)) {
			      $autoplay = "true";
		   }
		   if (empty($nav)) {
					  $nav = "true";
			}
			?>
			<!-- #######fin validaciones  -->
	</div>
	<!-- jquery  -->
<script>
$('.slider').bscSlider({
   autoplay :<?php echo $autoplay; ?>,
   navigation:<?php echo $nav; ?>,
	 duration: 3000,
	 effect: 1,
	 effect_speed: 750,
	 height: 400
 });
</script>

</body>
</html>
