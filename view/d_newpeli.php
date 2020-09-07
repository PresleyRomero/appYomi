<?php 
	require_once ("../controller/CAuxiliar.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mantenimiento</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/img/font/iconos.css">    
    <link rel="stylesheet" type="text/css" href="frontend/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="frontend/css/style-admin.css"> 
</head>
<body>
	<?php include ("frontend/retazos/cadmin.php"); ?>

	<main  class=" main-admin grey lighten-4">
		<div class="container">
			<div class="row">				
	            <div class="col s12 l6 offset-l3 div-enmarcado">
                    <h5 class="center">NUEVO PRODUCTO</h5>
                    <div class="row container">
                        <div class="col s12">
                            <form onsubmit="return false" id="form-datospeli" method="post" enctype="multipart/form-data" class="form-tight">
			                    <input type="text" name="op" value="registrarPeli" hidden>  
                            	<div class="row">			                        
			                        <div class="input-field col s12">                                
			                            <input type="text" id="txtnombre" name="txtnombre" value="" autofocus="" required="">  
			                            <label for="txtnombre">NOMBRE *</label>
			                        </div>                
			                    </div>
			                    <div class="row" hidden>			                        
			                        <div class="input-field col s12">                                
			                            <input type="text" id="txtfrase" name="txtfrase" value="frase">                            
			                            <label for="txtfrase">FRASE *</label>
			                        </div>                        
			                    </div>  
			                    <div class="row">			                        
			                        <div class="input-field col s12">                                
			                            <textarea id="txtdescripcion" name="txtdescripcion" class="materialize-textarea"></textarea>                          
			                            <label for="txtdescripcion">DESCRIPCIÓN </label>
			                        </div>                        
			                    </div>
			                    <div class="row">
				                    <div class="input-field col s12">
				                        <select multiple id="cbactores" name="cbactores[]">
				                          <option value="" disabled selected>Elige tallas</option>
				                          <?php 
					                      for ($i=0; $i < count($lstactores); $i++) {  ?>
					                        <option value="<?php echo($lstactores[$i]['idactor']) ?>"><?php echo($lstactores[$i]['nombres']) ?></option>
					                      <?php }?>
				                        </select>
				                        <label>TALLAS *</label>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="input-field col s12">
				                        <select id="cbcategoria" name="cbcategoria">
				                          <option value="" disabled selected>Selecciona categoría</option>
				                          <?php 
					                      for ($i=0; $i < count($lstcategorias); $i++) {  ?>
					                        <option value="<?php echo($lstcategorias[$i]['idcategoria']) ?>"><?php echo($lstcategorias[$i]['nombre']) ?></option>
					                      <?php }?>
				                        </select>
				                        <label>CATEGORÍA *</label>
				                    </div>
				                </div>
			                    <div class="row">			                        
			                        <div class="col s12">
			                        	<label for="file-img">IMAGEN: *</label><br>
                                		<input type="file" id="fileimg" name="fileimg" size="20">
			                        </div>                        
			                    </div>
			                    <div class="row">			                        
			                        <div class="input-field col s12">                                
                                		<button type="button" id="btnregistrar" class="btn">Registrar </button>
			                        </div>                        
			                    </div>
                            </form>
                        </div>                        
                    </div>
				</div> 
                <!-- <div class="col s12 m6 l6">
                    <h5 class="center">Vista Previa</h5>
                    <div class="row container">
                        
                    </div>
                </div>  -->               
			</div>                       
		</div>
	</main>

	<script  src="frontend/js/jquery.min.js"></script>
	<script  src="frontend/js/materialize.min.js"></script>
  	<!-- <script src="frontend/ajax/d_reportsx.js"></script>         -->
  	<!-- <script src="frontend/ajax/cab-adminx.js"></script>         -->
	<!-- <script src="frontend/ajax/cards-x.js"></script>         -->
	<script src="frontend/ajax/d_newpelix.js"></script>        

</body>	
</html>