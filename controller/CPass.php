<?php

if (isset($_POST['op'])) {
		
	require_once("../model/MLogin.php");
		
	try {
		session_start();
		$usersesion=$_SESSION["usersesion"];

		$op=$_POST['op'];
		$mlogin=new MLogin();

	    switch ($op) {

	    	case 'modificarpassnew':
		    	$passnew=$_POST["passnew"];
		    	if ($passnew==$usersesion["contrasenia"]) {
		    		echo "false";
		    	}else{
                	$mlogin->cambiarPass($usersesion["idalumno"],$passnew);
                	$_SESSION["usersesion"]["contrasenia"]=$passnew; //sobreescribe
                	echo "true";
            	}
	    		break;

	    	case 'modificarpass':	
		    	$passactual=$_POST["passactual"];
		    	$passnew=$_POST["passnew"];
		    	if ($passactual===$usersesion["contrasenia"]) {
                    $mlogin->cambiarPass($usersesion["idalumno"],$passnew);
                    $_SESSION["usersesion"]["contrasenia"]=$passnew; //sobreescribe
                    echo "true";
                }else{
                    echo "false";
                }
	    		break;

	    	default:	
	    		echo "op desconocido";
	    		break;
	    }  

	} catch (Throwable $ee) {
		echo "CAPTURADO!!: ".$ee->getMessage().".<br> Archivo: ".$ee->getFile().". Linea: ".$ee->getLine();
	}
}

?>