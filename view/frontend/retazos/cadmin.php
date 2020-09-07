

<!---------------------------------------------------------------------------------------------------------------->

<header id="header" class="">
    <div class="navbar-fixed">
      <nav class="navegation grey lighten-2"  style="padding: 0 2em">
        <div class="nav-wrapper">                
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
                <li><a href="#!">ADMIN</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="close_session.php">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <ul id="slide-out" class=" nav-movile sidenav sidenav-fixed  grey lighten-5">
        <li>
            <div class="user-view">
              <div class="background ">
                <img class="responsive-img" src="frontend/img/vector-red.jpg">
              </div>
              <a href="#user"><img class="circle" src="frontend/img/perfil-karen5.jpg"></a>
              <a href="#name"><span class="white-text name">KAREN YOMIRA ROMERO</span></a>
              <a href="#email"><span class="white-text email">kyomira08@gmail.com</span></a>
            </div>
        </li>     
        <li><a href="#"><i class="material-icons">person</i>Perfil</a></li>
        <li><a href="d_newpeli.php"><i class="material-icons">book</i>Nuevo Registro</a></li>
        <li><a href="d_cards.php"><i class="material-icons">assignment</i>Lista de Productos</a></li>
        <li class="divider" tabindex="-1"></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header"><i class="material-icons">settings</i>Configuraciones<i class="material-icons right">arrow_drop_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="d_config.php">Nuevos Registros</a></li>
                  <li><a href="#modal-newpass" class="modal-trigger">Cambiar Contraseña</a></li>
                  <li><a href="close_session.php">Cerrar Sesión</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>        
    </ul>
    <div class="grey lighten-4"><a href="#" data-target="slide-out" class="sidenav-trigger "><i class="material-icons">menu</i></a></div>    
</header>


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!--Modal cambiar contraseña-->                  
    <div class="modal modal-medium" id="modal-newpass">
        <div class="modal-content center">            
            <h4>Cambiar mi contraseña</h4>
            <form class="" id="form-newpass">
                <div class="row">
                    <div class="input-field col s12">
                      <input id="txtpassactual" type="password" class="validate" autofocus="">
                      <label for="txtpassactual">Ingrese contraseña actual</label>
                    </div>
                </div>            
                <div class="row">
                    <div class="input-field col s12">
                      <input id="txtpassnew" type="password" class="validate">
                      <label for="txtpassnew">Ingrese nueva contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input id="txtpassconf" type="password" class="validate">
                      <label for="txtpassconf">Confirme nueva contraseña</label>
                    </div>
                </div>  
                <div class="row">
                    <div class="input-field col s12">                  
                        <a class="btn waves-effect waves-light red darken-4" id="btncambiarpass">Actualizar</a>
                    </div>
                </div>                    
            </form>    
        </div>
    </div>



