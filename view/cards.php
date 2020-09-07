<?php
     
  require_once("../controller/CPeli.php");

?> 
  
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/img/font/iconos.css">    
  <link rel="stylesheet" type="text/css" href="frontend/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="frontend/css/style-admin.css"> 
</head>
<body>

	<?php include ("frontend/retazos/header-cards.php"); ?>

	<main class="grey lighten-4">
		<div class="container">
        <!-- <h4 class="center">ESTRENOS - PELÍCULAS - DORAMAS </h4> -->
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
        <h5>¡HOLA MUNDO! :)</h5>
        <p> <strong></strong></p>
      </div>
    </div>
    
  </main>

	<script  src="frontend/js/jquery.min.js"></script>
	<!-- <script  src="frontend/js/materialize.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- <script src="frontend/ajax/d_reportsx.js"></script>         -->
  <!-- <script src="frontend/ajax/cab-adminx.js"></script>         -->
	<script src="frontend/ajax/cards-x.js"></script>        

</body>
</html>