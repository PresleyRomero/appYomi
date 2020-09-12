<?php    
  // require_once("../controller/CPeli.php");
  require_once ("../controller/CAuxiliar.php");
?> 
  
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Pelis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/img/font/iconos.css">    
  <link rel="stylesheet" type="text/css" href="frontend/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="frontend/css/style-admin.css"> 
</head>
<body>

	<?php include ("frontend/retazos/cadmin.php"); ?>

	<main class=" main-admin grey lighten-4 ">
		<div class="container">
        <div class="div-flex">          
          <span class="purple-text text-darken-2"><h6><strong>CATEGORÍA: </strong></h6></span>
            <select id="cbcategoria" name="cbcategoria">                    
              <?php 
              for ($k=0; $k < count($lstcategorias); $k++) {  ?>
                <option value="<?php echo($lstcategorias[$k]['idcategoria']) ?>"><?php echo($lstcategorias[$k]['nombre']) ?></option>
              <?php }?>                  
            </select>                  
        </div>
        <li class="divider" tabindex="-1"></li>
        <div class="row" id="div-cards-pelis">        
          <!-- Una vez cargado toda esta pagina, cargan los cards con AJAX -->
        </div>        	
		</div>
  </main>

  <!--Modal modificar datos -->                  
      <div class="modal modal-medium" id="modal-modificar">
          <div class="modal-content">        
              <div class="row"><h5 class="center">MODIFICAR</h5></div>                         
              <div class="row">
                  <div class="col s12">
                      <form onsubmit="return false" id="form-datospeli" method="post" class="form-tight">
                        <input type="text" id="op" name="op" value="" hidden> 
                        <input type="text" id="txtidpeli" name="txtidpeli" value="" hidden> 
                        <div class="row">                             
                            <div class="input-field col s12">                                
                                <input type="text" id="txtnombre" name="txtnombre" value="" autofocus="" required="">  
                                <label for="txtnombre">NOMBRE DEL PRODUCTO *</label>
                            </div>                        
                        </div>
                        <div class="row" hidden="">                             
                            <div class="input-field col s12">                                
                                <input type="text" id="txtfrase" name="txtfrase" value="">                            
                                <label for="txtfrase">FRASE *</label>
                            </div>                        
                        </div>  
                        <div class="row">                             
                            <div class="input-field col s12">                                
                                <textarea id="txtdescripcion" name="txtdescripcion" class="materialize-textarea"></textarea>                          
                                <label for="txtdescripcion">STOCK DESCRIPTIVO *</label>
                            </div>                        
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                              <select multiple id="cbactores" name="cbactores[]">
                                <option value="0" disabled selected>Elige tallas</option>
                                <?php                                
                                 for ($j=0; $j < count($lstactores); $j++) {  ?>
                                  <option value="<?php echo($lstactores[$j]['idactor']) ?>"><?php echo($lstactores[$j]['nombres']) ?></option>
                                <?php }?>
                              </select>
                              <label>TALLAS *</label>
                          </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select id="cbcategoriamod" name="cbcategoriamod">
                                  <option value="" disabled selected>Selecciona categoría</option>
                                  <?php 
                                for ($i=0; $i < count($lstcategorias); $i++) {  ?>
                                  <option value="<?php echo($lstcategorias[$i]['idcategoria']) ?>"><?php echo($lstcategorias[$i]['nombre']) ?></option>
                                <?php }?>
                                </select>
                                <label>CATEGORÍA *</label>
                            </div>
                        </div>                        
                        <div class="row foot-note">
                          <p >
                            ¿Está seguro de modificar los datos de este producto?                                                
                          </p>
                          <p><label><input type="checkbox" id="chkacepto" /><span>SEGURO</span></label></p>
                        </div>                  
                        <div class="row right">
                            <div class="col s12">
                                <!-- <button type="button" id="btnactualizardp" class="btn waves-effect waves-red red darken-4" disabled="">Actualizar</button><br> -->
                                <button type="button" id="btnactualizar" class="btn waves-effect" disabled>Actualizar</button>
                            </div>    
                        </div><br>
                        <div class="row">                             
                            <div class="input-field col s12">                                
                                  
                            </div>                        
                        </div>
                      </form>
                  </div>                        
              </div> 
          </div>
      </div>

    <!--Modal cambiar imagen -->                  
      <div class="modal modal-medium" id="modal-cambiarimg">
          <div class="modal-content">        
              <div class="row"><h5 class="center">CAMBIAR IMAGEN</h5></div>                         
              <div class="row">
                  <div class="col s12">
                      <form onsubmit="return false" id="form-imgpeli" method="post" enctype="multipart/form-data" class="form-tight">                       
                        <input type="text" id="op2" name="op" value="" hidden> 
                        <input type="text" id="txtidpeli2" name="txtidpeli" value="" hidden> 
                        <div class="row">                             
                            <div class="col s12">
                              <label for="file-img">IMAGEN:</label><br>
                                <input type="file" id="fileimg" name="fileimg" size="20">
                            </div>                        
                        </div>
                        <div class="row foot-note">
                          <p >
                            ¿Está seguro de modificar la imagen de este producto?                                                
                          </p>
                          <p><label><input type="checkbox" id="chkacepto2" /><span>SEGURO</span></label></p>
                        </div>                  
                        <div class="row right">
                            <div class="col s12">
                                <button type="button" id="btnactualizarImg" class="btn waves-effect" disabled>Actualizar</button>
                                <div id="preloader-modimg" hidden> 
                                  <div class="progress">
                                      <div class="indeterminate"></div>
                                  </div>
                                </div>
                            </div>    
                        </div>                    
                      </form>
                  </div>                        
              </div> 
          </div>
      </div>

	<script  src="frontend/js/jquery.min.js"></script>
	<script  src="frontend/js/materialize.min.js"></script>
  <script src="frontend/ajax/cab-adminx.js"></script>        
	<script src="frontend/ajax/d_cardx.js"></script>        

</body>
</html>