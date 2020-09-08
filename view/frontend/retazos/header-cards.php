

<!---------------------------------------------------------------------------------------------------------------->

<header id="header" class="">
    <div class="navbar-fixed">
      <nav class="navegation grey lighten-2" >
        <div class="nav-wrapper"> 
          <ul class="left">
            <li><span class="purple-text text-darken-2"><strong>CATEGORÍA: </strong></span></li>
            <li class="licategoria">
              <select id="cbcategoria" name="cbcategoria">                    
                <?php 
                for ($k=0; $k < count($lstcategorias); $k++) {  ?>
                  <option value="<?php echo($lstcategorias[$k]['idcategoria']) ?>"><?php echo($lstcategorias[$k]['nombre']) ?></option>
                <?php }?>                  
              </select>                  
            </li>   
          </ul>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="alerta">
              <a href="#" class="link" ><i class="material-icons" style="color: #333333">notifications</i><span class="new badge">0</span></a>
            </li>
            <li>
              <a class='dropdown-trigger' data-target='dropdown1' >
                <span class="avatar-status">
                  <img src="frontend/img/user.png" alt="perfil">
                </span>
              </a>
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="login.php">ADMIN</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="close_session.php">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </div>
</header>

