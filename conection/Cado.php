<?php
	
	class Cado {
		
		public static function obtenerConexion() {    			
			try{
				$conn=new PDO('mysql:host=localhost; dbname=dbpelis','root','');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conn->exec("SET CHARACTER SET utf8");
				return $conn;				
			}catch(Exception $e){				
	        	//die("El error es: ".$e->getMessage());
	        	throw $e;
			}				
	    } 	
	}	

	//Cado::obtenerConexion();		
?>
