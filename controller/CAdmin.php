<?php

if (isset($_POST['op'])) {
		
	require_once("../model/MPeli.php");
		
	try {
		// session_start();
		// $useradsesion=$_SESSION["useradsesion"];

		$op=$_POST['op'];

	    switch ($op) {

	    	case 'listarpelis':
	    		$mpeli=new MPeli();
	    		$lst=$mpeli->listarPelis($_POST['idcategoria']); 
		        if(count($lst)>0){
		        	echo json_encode($lst);  
		        }else{
		            echo "vacio";
		        }
	    		break;	

	    	case 'obtenerPeli':
	    		$mpeli=new MPeli();
	    		$lst=$mpeli->obtenerPeli($_POST["idpeli"]); 
		        if(count($lst)>0){		        	
		        	echo json_encode($lst);
		        }else{
		            echo "vacio";
		        }
	    		break;

	    	case 'registrarPeli':    	
		   		$nombre_peli=strtoupper($_POST['txtnombre']);
		   		$frase=$_POST['txtfrase'];
		   		$descripcion=$_POST['txtdescripcion'];		   		
		   		$lstactores=$_POST['cbactores'];
		   		$idcateg=$_POST['cbcategoria'];
		   		
		   		//Recibimos los datos de la imagen	
		   		$nombre_img=$_FILES['fileimg']['name'];
		   		$tipo_img=$_FILES['fileimg']['type'];
		   		$tamanio_img=$_FILES['fileimg']['size'];

		   		if ($tamanio_img < 1000) {
		   			echo ":( Tamaño de archivo no permitido";
		   		}else if($tamanio_img < 2500000){		
		   			if ($tipo_img=="image/jpeg" || $tipo_img=="image/jpg" || $tipo_img=="image/png" || $tipo_img=="image/gif") {
		   				//Ruta de la carpeta destino en servidor
		   				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/appPelis/view/frontend/img/uploads-img-cards/';
		   				//Movemos la imagen del directorio tmp al directorio escogido
		   				move_uploaded_file($_FILES['fileimg']['tmp_name'], $carpeta_destino.$nombre_img);
		   				//Ejecutamos Registro
		   				$mpeli=new MPeli();
		   				$mpeli->registrar($nombre_peli, $frase, $descripcion, $nombre_img, $idcateg, $lstactores);
		   				echo "true";
		   			}else{
		   				echo "Por favor, intente subir solo imágenes";
		   			}
		   		}else{
		   			echo "El tamaño de la imagen es demasiado grande";
		   		}
	    		break;

	    	case 'modificarPeli':
	    		$idpeli=$_POST['txtidpeli'];	    	
	    		$nombre_peli=strtoupper($_POST['txtnombre']);
	    		$frase=$_POST['txtfrase'];
	    		$descripcion=$_POST['txtdescripcion'];
	    		$lstactores=$_POST['cbactores'];
	    		$idcateg=$_POST['cbcategoriamod'];
				$mpeli=new MPeli(); 
				$mpeli->modificarPeli($idpeli, $nombre_peli, $frase, $descripcion, $idcateg, $lstactores);
				echo "true";		   		
	    		break;

			case 'modificarImgPeli':
	    		$idpeli=$_POST['txtidpeli'];   
	    		//Recibimos los datos de la imagen	
	    		$nombre_img=$_FILES['fileimg']['name'];
	    		$tipo_img=$_FILES['fileimg']['type'];
	    		$tamanio_img=$_FILES['fileimg']['size'];

	    		if ($tamanio_img < 1000) {
	    			echo ":( Tamaño de archivo no permitido";
	    		}else if($tamanio_img < 2500000){		
	    			if ($tipo_img=="image/jpeg" || $tipo_img=="image/jpg" || $tipo_img=="image/png" || $tipo_img=="image/gif") {
	    				//Ruta de la carpeta destino en servidor
	    				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/appPelis/view/frontend/img/uploads-img-cards/';
	    				//Movemos la imagen del directorio tmp al directorio escogido
	    				move_uploaded_file($_FILES['fileimg']['tmp_name'], $carpeta_destino.$nombre_img);
	    				//Ejecutamos Registro
	    				$mpeli=new MPeli(); 
	    				$mpeli->modificarImgPeli($idpeli, $nombre_img);
	    				echo "true";
	    			}else{
	    				echo "Por favor, intente subir solo imágenes";
	    			}
	    		}else{
	    			echo "El tamaño de la imagen es demasiado grande";
	    		}						   		
	    		break;   
	    	
	    	default:	
	    		echo "op desconocido: " .  $op;
	    		break;
	    }  

	 }catch (Exception  $e) { 
        if ($e->getCode()==23000) echo "Este dato ya fue registrado anteriormente";
    }catch(Throwable $ee){
        echo "CAPTURADO!!: ".$ee->getMessage().".<br> Archivo: ".$ee->getFile().". Linea: ".$ee->getLine();
    }
}

?>

	