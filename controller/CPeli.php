
<?php

require_once("../model/MPeli.php");

if (isset($_GET['idcat'])) {
	$idcategoria=$_GET["idcat"];
	$mpeli=new MPeli();
	$lstpelis=$mpeli->listarPelis($idcategoria); 
}else{
	$mpeli=new MPeli();
	$lstcategorias=$mpeli->listarCategorias();
}

?>
		