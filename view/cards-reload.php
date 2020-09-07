

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
                  <span class="card-title activator grey-text text-darken-4"><?php echo($lstpelis[$i]["nombre"]); ?></span>
                  <p class="center"><a href="#"><em>Tallas: <?php echo($lstpelis[$i]["actores"]); ?></em></a></p>
                </div>  
              </div>
            </div>
<?php     } ?> 

        

<script>
  $(document).ready(function(){
    $('.tabs').tabs();
    // $('.materialboxed').materialbox(); 
  });
</script>