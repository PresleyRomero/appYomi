<?php

if (isset($_POST['op'])) {
		
	require_once("../model/MLogin.php");
		
	try {		

		$op=$_POST['op'];
		$mlogin=new MLogin();

	    switch ($op) {

	    	case 'login':	
		    	$resultado=$mlogin->buscarUsuario2();
				if ($resultado==null) {
					echo "false";				
				}else{
					session_start();
					$_SESSION["usersesion"]=$resultado;					
					echo "true";
				}
	    		break;

	   //  	case 'loginadmin':	
		  //   	$resultado=$mlogin->buscarUsuario2();
				// if ($resultado==null) {
				// 	echo "false";
				// }else {
				// 	session_start();
				// 	$_SESSION["useradsesion"]=$resultado;				
				// 	echo "true";
				// }
	   //  		break;

	    	case 'recuperarpass':		    		
	    		$resultado=$mlogin->buscarDni();
	    		if ($resultado==null) {
					echo "false";
				}else {
					$mlogin=new MLogin();
					$clave=rand(1,999999);
					$email=$resultado["email"];
					$mlogin->cambiarPass($resultado["idalumno"],$clave);
					//enviar mail
					$mensaje = '
						<html>
					     <head>
					        <title>Restablece tu contraseña</title>
					     </head>
					     <body>
					       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
					       <p>Si hiciste esta petición, vuelve a ingresar al sistema del COMEDOR UNIVERSITARIO - UNPRG con tu código o dni y la nueva clave. Por favor, inmediatamente después cambia tu contraseña en el menú opciones. Si no hiciste esta petición puedes ignorar este correo.</p>
					       <p>
					         <strong>Tu nueva clave es:</strong><br>
					         <strong>'.$clave.'</strong>
					       </p>
					     </body>
					    </html>';
					$remitente= 'bienestarunprg@lalysha.com';//'presleyromero11@gmail.com';
					$cabeceras = 'MIME-Version: 1.0' . "\r\n";
				    $cabeceras .= 'Content-type: text/html; charset=utf8' . "\r\n";
				    $cabeceras .= 'From: Comedor Universitario - UNPRG <'.$remitente.'>' . "\r\n";
				    mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
					echo "true?".$email;
				}
	    		break;

	   //  	case 'recuperarpassAdmin':		    		
	   //  		$resultado=$mlogin->buscarUsuario3();
	   //  		if ($resultado==null) {
				// 	echo "false";
				// }else {
				// 	$mlogin=new MLogin();
				// 	$clave=rand(1,999999);
				// 	$email=$resultado["email"];
				// 	$mlogin->cambiarPassAdmin($resultado["idusuario"],$clave);
				// 	//enviar mail
				// 	$mensaje = '
				// 		<html>
				// 	     <head>
				// 	        <title>Restablece tu contraseña de Admin</title>
				// 	     </head>
				// 	     <body>
				// 	       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta <strong>"'.$resultado["usuario"].'"</strong>.</p>
				// 	       <p>Si hiciste esta petición, vuelve a ingresar al sistema del COMEDOR UNIVERSITARIO - UNPRG como ADMIN y digita la nueva clave. Por favor, inmediatamente después cambia tu contraseña en el menú "Configuraciones".<br>
				// 	       	   Si no hiciste esta petición puedes ignorar este correo.</p>
				// 	       <p>
				// 	         <strong>Tu nueva clave es:</strong><br>
				// 	         <strong>'.$clave.'</strong>
				// 	       </p>
				// 	     </body>
				// 	    </html>';
				// 	$remitente= 'bienestarunprg@lalysha.com';//'presleyromero11@gmail.com';
				// 	$cabeceras = 'MIME-Version: 1.0' . "\r\n";
				//     $cabeceras .= 'Content-type: text/html; charset=utf8' . "\r\n";
				//     $cabeceras .= 'From: Comedor Universitario - UNPRG <'.$remitente.'>' . "\r\n";
				//     mail($email, "Recuperar contraseña - cuenta ADMIN", $mensaje, $cabeceras);
				// 	echo "true?".$email;
				// }
	   //  		break;

	    	default:	
	    		echo "op desconocido";
	    		break;
	    }  

	} catch (Throwable $ee) {
		echo "CAPTURADO!!: ".$ee->getMessage().".<br> Archivo: ".$ee->getFile().". Linea: ".$ee->getLine();
	}
}
?>


