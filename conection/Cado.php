<?php
	
	class Cado {
		
		public static function obtenerConexion() {    			
			try{
				// $conn=new PDO('mysql:host=localhost; dbname=dbpelis','root','');
				$conn=new PDO('mysql:host=us-cdbr-east-02.cleardb.com; dbname=heroku_abca74d50ab8b3d','b8062343aa0f5c','60053bd6');
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
