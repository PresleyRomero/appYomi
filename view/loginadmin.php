<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="frontend/css/loginadmin.css">
        <link rel="stylesheet" type="text/css" href="frontend/img/font/iconos.css">
        
    </head>
    <body>
        <div class="loginbox">
            <img src="frontend/img/logo.jpg" class="avatar">
            <h1 id="titlelogin">Iniciar Sesión</h1>
            <h5>- Admin -</h5>
            <form id="form-login">
                <p>Usuario</p>
                <input id="txtuser" name="txtuser" type="text" placeholder="Ingrese Usuario" autofocus="" >
                <p>Contraseña</p>
                <input id="txtpass" name="txtpass" type="password" placeholder="Ingrese clave" >
                <input id="btnentrar" type="button" value="Entrar">
                <a href="#" id="linkolvido">¡Olvidé mi contraseña! Discúlpeme joven...</a><br>                             
            </form>
            <form id="form-recuperar" hidden="">
                <input id="txtuser2" name="txtuser2" type="text" placeholder="Ingrese Usuario" autofocus="">
                <input id="btnrestablecer" type="button" value="Enviar">
                <a href="#" id="linkatras">&laquo Ir atrás</a>
            </form>  
            <div id="message-login" class="message"></div>   
            <div id="message-success" class="message message-lg message-success"></div>
        </div>

        <script  src="frontend/js/jquery.min.js"></script>
        <script  src="frontend/ajax/d_loginx.js"></script>
    </body>
</html>
