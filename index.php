<!DOCTYPE html>
<html>
<head>
	<title>BIENESTAR UNIVERSITARIO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--Para optimizar en mobile browser-->
  <link rel="stylesheet" type="text/css" href="view/frontend/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="view/frontend/css/index.css">
  <link rel="stylesheet" type="text/css" href="view/frontend/img/font/iconos.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

  <!-- navbar -->
  <header>
    <nav class="nav-wrapper transparent">
      <div class="container">
        <a href="#" class="brand-logo red-text text-darken-4"><strong>Comedor Universitario</strong></a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="view/login.php" class="red-text text-darken-4"><strong>Login</strong></a></li>
          <li><a href="#services" class="red-text text-darken-4"><strong>Servicios</strong></a></li>
          <li><a href="#contact" class="red-text text-darken-4"><strong>Contacto</strong></a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small teal darken-2" data-position="bottom" data-tooltip="Instagram"> 
            <i class="fab fa-instagram"></i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4" data-position="bottom" data-tooltip="Google+"> 
            <i class="fab fa-google-plus-g"></i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small teal darken-2" data-position="bottom" data-tooltip="Facebook">
            <i class="fab fa-facebook"></i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4" data-position="bottom" data-tooltip="Twitter">
            <i class="fab fa-twitter"></i>
          </a></li>
        </ul>
        <ul class="sidenav grey lighten-2" id="mobile-menu">
          <li><a href="view/login.php">Iniciar sesión</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </div>
    </nav>
  </header>

   
  <!-- services / tabs -->
  <section class="section container scrollspy" id="services">
    <div class="row">
      <div class="col s12 l4">
        <h2 class="indigo-text text-darken-4">¿Qué hacemos?</h2>
        <p>En la Oficina General de Bienestar Universitario - UNPRG, ofrecemos a toda la comunidad universitaria los siguientes servicios:</p>
        <p>Deportes, Comedor Universitario, Servicio Social, Psicología, Arte y Servicio Médico.</p>
      </div>
      <div class="col s12 l6 offset-l2">
        <!-- tabs -->
        <ul class="tabs">
          <li class="tab col s6">
            <a href="#photography" class="active indigo-text text-darken-4">Misión</a>
          </li>
          <li class="tab col s6">
            <a href="#editing" class="indigo-text text-darken-4">Visión</a>
          </li>
        </ul>
        <div id="photography" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Misión</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
        </div>
        <div id="editing" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Visión</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- parallax -->
  <div class="parallax-container">
    <div class="parallax">
      <img src="view/frontend/img/stars.jpg" alt="" class="responsive-img">
    </div>
  </div>

  <!-- contact form -->
  <section class="section container scrollspy" id="contact">
    <div class="row">
      <div class="col s12 l5">
        <h2 class="indigo-text text-darken-4">¡Contáctanos!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
        <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
        <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
      </div>
      <div class="col s12 l5 offset-l2">
        <form>
          <div class="input-field">
            <i class="material-icons prefix">email</i>
            <input type="email" id="email">
            <label for="email">Your Email</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">message</i>
            <textarea id="message" class="materialize-textarea" cols="20" rows="20"></textarea>
            <label for="message">Your Message</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">date_range</i>
            <input type="text" id="date" class="datepicker">
            <label for="date">Choose a date you need me for...</label>
          </div>
          <div class="input-field">
            <p>Services required:</p>
            <p>
              <label>
                <input type="checkbox">
                <span>Photography</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox">
                <span>Photo Editing</span>
              </label>
            </p>
          </div>
          <div class="input-field center">
            <button class="btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5>Enlaces Directos</h5>
          <p><a href="http://www.unprg.edu.pe" target="_blank"> UNIVERSIDAD NACIONAL PEDRO RUIZ GALLO</a></p>
          <p><a href="view/loginadmin.php"> Ingresar como Admin</a></p><br>          
          <p>Tarde o temprano la DISCIPLINA vencerá a la INTELIGENCIA. (YOKOI KENJI)</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">¡Conéctate!</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#">Facebook</a></li>
            <li><a class="grey-text text-lighten-3" href="#">Twitter</a></li>
            <li><a class="grey-text text-lighten-3" href="#">Linked In</a></li>
            <li><a class="grey-text text-lighten-3" href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container center-align">&copy; 2018 Bienestar Universitario - UNPRG</div>
    </div>
  </footer>
  <!--   <div class="carousel">
	    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
	    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
	    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
	    <a class="carousel-item" href="#four!"><img src="view/frontend/img/risameme.jpg"></a>
	    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
	 </div>

	<!-- Element Showed ->
	<a id="menu" class="waves-effect waves-light btn btn-floating btn-large" ><i class="material-icons">menu</i></a>

	<!-- Tap Target Structure ->
	<div class="tap-target" data-target="menu">
	    <div class="tap-target-content">
	      <h5>Title</h5>
	      <p>A bunch of text</p>
	    </div>
	</div>
	 -->
	<script  src="view/frontend/js/jquery.min.js"></script>
	<script  src="view/frontend/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1  });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
	    	// $('.carousel').carousel();
	    	// $('.tap-target').tapTarget();
	  	});
	</script>

      
	
</body>
</html>