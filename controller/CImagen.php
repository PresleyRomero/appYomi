<?php 

	require_once("../model/MPeli.php");

	
	$nombre_peli=strtoupper($_POST['txtnombre']);
	$frase=$_POST['txtfrase'];
	$descripcion=$_POST['txtdescripcion'];
	$lstactores=$_POST['cbactores'];
	
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
			$mpeli->registrar($nombre_peli, $frase, $descripcion, $nombre_img, $lstactores);
			echo "true";
		}else{
			echo "Por favor, intente subir solo imágenes";
		}
	}else{
		echo "El tamaño de la imagen es demasiado grande";
	}	

?>