<?php
     
  require_once("../controller/CPeli.php");

?> 
  
<!DOCTYPE html>
<html>
<head>
	<title>Moda Verano 2020</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="frontend/img/exito-icon-r.png">
    <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/img/font/iconos.css">    
  <link rel="stylesheet" type="text/css" href="frontend/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="frontend/css/style-admin.css"> 
</head>
<body>

	<?php include ("frontend/retazos/header-cards.php"); ?>

	<main class="grey lighten-4">
		<div class="container">        
        <li class="divider" tabindex="-1"></li>
        <div class="row" id="div-cards-pelis">        
          <!-- Una vez cargado toda esta pagina, cargan los cards de la pagina cards-reload.php -->
        </div>        	
		</div>

    <!-- Tap Target  -->
    <div class="fixed-action-btn fixed-action-btn-rb">
      <a id="atencion" class="btn btn-floating btn-large cyan" onclick="$('.tap-target').tapTarget('open')">
        <i class="material-icons">announcement</i>
      </a>
    </div>    
    <div class="tap-target cyan" data-target="atencion">
      <div class="tap-target-content">
        <h5>¡HOLA!</h5>
        <p> <strong>Bienvenid@ a tu catálogo virtual de #ModaVerano2020. <br> Realiza tu pedido al wa: 994427382. <br>Encantadísimos de atenderte!! ;) </strong></p>
      </div>
    </div>
    
  </main>

	<script  src="frontend/js/jquery.min.js"></script>
	<script  src="frontend/js/materialize.min.js"></script>
  <!-- <script src="frontend/ajax/cab-adminx.js"></script>         -->
	<script src="frontend/ajax/cards-x.js"></script>        

</body>
</html>