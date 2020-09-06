<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="frontend/css/login.css">
        <link rel="stylesheet" type="text/css" href="frontend/img/font/iconos.css">
        
    </head>
    <body>
        <div class="loginbox">
            <img src="frontend/img/loginlogo.png" class="avatar">
            <h1 id="titlelogin">Iniciar Sesión</h1>
            <form id="form-login">
                <p>Usuario</p>
                <input id="txtuser" name="txtuser" type="text" placeholder="Ingrese su usuario" autofocus="" >
                <p>Contraseña</p>
                <input id="txtpass" name="txtpass" type="password" placeholder="Ingrese su clave" >
                <input id="btnentrar" type="button" value="Entrar">   
                <a href="#" id="linkolvido">¡Olvidé mi contraseña! Discúlpeme joven...</a>  
            </form>
            <form id="form-recuperar" hidden="" >
                <input class="int-pos" id="txtdni" name="txtdni" type="text" placeholder="Ingrese su DNI" autofocus="">
                <input id="btnrestablecer" type="button" value="Enviar">
                <a href="#" id="linkatras">&laquo Ir atrás</a>
            </form>         
            <div id="message-login" class="message"></div>
            <div id="message-success" class="message message-lg message-success"></div>
        </div>

        <script  src="frontend/js/jquery.min.js"></script>
        <script  src="frontend/js/jquery.numeric.min.js"></script>
        <script  src="frontend/ajax/a_loginx.js"></script>
    </body>
</html>
