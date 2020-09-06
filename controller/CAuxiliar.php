<?php 


	require_once("../model/MAuxiliar.php");

	$mauxiliar=new MAuxiliar();	
	$lstcategorias=$mauxiliar->listarCategorias(); 
	$mauxiliar=new MAuxiliar();	
	$lstactores=$mauxiliar->listarActores(); 

	

// if (isset($_POST['op'])) {
	
// 	require_once("../model/MAuxiliar.php");
		
// 	try {
// 		$op=$_POST['op'];
// 		$mauxiliar=new MAuxiliar();

// 	    switch ($op) {
// 	    	case 'listarRegiones':
// 	    		$lstregiones=$mauxiliar->listarRegiones(); 
// 		        if(count($lstregiones)>0){		        	
// 		        	echo json_encode($lstregiones);  
// 		        }else{
// 		            echo "vacio";
// 		        }
// 	    		break;

// 	    	case 'listarProvincias':
// 	    		$prefijo=$_POST['prefijo'];
// 	    		$lstprovincias=$mauxiliar->listarProvincias($prefijo); 
// 		        if(count($lstprovincias)>0){		        	
// 		        	echo json_encode($lstprovincias);  
// 		        }else{
// 		            echo "vacio";
// 		        }
// 	    		break;	

// 	    	case 'listarDistritos':
// 	    		$prefijo=$_POST['prefijo'];
// 	    		$lstdistritos=$mauxiliar->listarDistritos($prefijo); 
// 		        if(count($lstdistritos)>0){		        	
// 		        	echo json_encode($lstdistritos);  
// 		        }else{
// 		            echo "vacio";
// 		        }
// 	    		break;	

// 	    	case 'listarciclos':
// 	    		$lst=$mauxiliar->listarCiclos(); 
// 		        if(count($lst)>0){		        	
// 		        	echo json_encode($lst);  
// 		        }else{
// 		            echo "vacio";
// 		        }
// 	    		break;	

// 	    	case 'listarfacultades':
// 	    		$lst=$mauxiliar->listarFacultads(); 
// 		        if(count($lst)>0){		        	
// 		        	echo json_encode($lst);  
// 		        }else{
// 		            echo "vacio";
// 		        }
// 	    		break;	

// 	    	case 'listarescuelas':
// 	    		$idfacu=$_POST['idfacultad'];
// 	    		$lst=$mauxiliar->listarEscuelas($idfacu); 
// 		        if(count($lst)>0){		        	
// 		        	echo json_encode($lst);  
// 		        }else{
// 		            echo "vacio";
// 		        }
// 	    		break;	
	  
// 	    	default:	
// 	    		echo "op desconocido";
// 	    		break;
// 	    }  

// 	} catch (Throwable $ee) {
// 		echo "CAPTURADO!!: ".$ee->getMessage().".<br> Archivo: ".$ee->getFile().". Linea: ".$ee->getLine();
// 	}
// }


 ?>