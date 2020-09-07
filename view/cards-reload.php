

<?php
  
    require_once("../controller/CPeli.php");

          for ($i=0; $i < count($lstpelis); $i++) { ?>
            <div class="col s12 m4 l3">
              <div class="card ">
                <div class="card-image waves-effect waves-block waves-light">
                <!-- <div class="card-image "> -->
                  <!-- <img class="activator" src="frontend/img/uploads-img-cards/<?php echo $lstpelis[$i]['route_img']; ?>"> -->
                  <img class="materialboxed" src="frontend/img/uploads-img-cards/<?php echo $lstpelis[$i]['route_img']; ?>">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><?php echo($lstpelis[$i]["nombre"]); ?><i class="material-icons right">more_vert</i></span>
                  <p class="center"><a href="#"><em><?php echo($lstpelis[$i]["frase"]); ?></em></a></p>
                </div>                
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><?php echo($lstpelis[$i]["nombre"]); ?><i class="material-icons right">expand_more</i></span>
                  <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                      <li class="tab"><a href="#desc-<?php echo($lstpelis[$i]["idpelicula"]); ?>">Descripción</a></li>
                      <li class="tab"><a class="active" href="#pers-<?php echo($lstpelis[$i]["idpelicula"]); ?>">Actores</a></li>
                      <li class="tab"><a href="#mas-<?php echo($lstpelis[$i]["idpelicula"]); ?>">Más</a></li>
                    </ul>
                  </div>
                  <div class="card-content grey lighten-4">
                    <div id="desc-<?php echo($lstpelis[$i]["idpelicula"]); ?>">
                      <p><?php echo($lstpelis[$i]["descripcion"]); ?></p>
                    </div>
                    <div id="pers-<?php echo($lstpelis[$i]["idpelicula"]); ?>">
                      <?php 
                      $lstactores = explode("?",$lstpelis[$i]["actores"]);
                      for ($j=0; $j < count($lstactores); $j++) { ?>
                        <p><?php echo($lstactores[$j]); ?></p>
                      <?php } ?>
                    </div>
                    <div id="mas-<?php echo($lstpelis[$i]["idpelicula"]); ?>">
                      <p>Más detalles</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     } ?> 

          <img class="materialboxed" width="350" src="https://materializecss.com/images/sample-1.jpg">



<script>
  $(document).ready(function(){
    $('.tabs').tabs();
    $('.materialboxed').materialbox(); 
  });
</script>