<?php
	
	class MAdmin {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();		
			}catch(Exception $e){
				throw $e;				
			}
		}


	
		// public function obtenerPeli($idpeli){
		// 	try{
		// 		$sql="SELECT p.idpelicula, p.nombre, p.frase, p.descripcion, p.route_img, GROUP_CONCAT(pa.idactor SEPARATOR '?') actores FROM pelicula p INNER JOIN peli_actor pa ON pa.idpelicula=p.idpelicula where p.idpelicula=".$idpeli." GROUP BY p.idpelicula ORDER BY p.idpelicula desc";
		// 		$rs=$this->conn->query($sql);
		// 		$resultado=$rs->fetchAll(PDO::FETCH_ASSOC);
		// 		return $resultado[0];				
		// 	}catch(Exception $e){
		// 		throw $e;
		// 	}finally{
		// 		$rs=null;
		// 		$this->conn=null;
		// 	}			
		// }

	


		// public function cambiarPass($iduser,$password) {
		// 	try{
		// 		$sql="update user set contrasenia=? where idusuario=? ";
		// 		$this->conn->beginTransaction(); 
		// 		$pstm=$this->conn->prepare($sql);				
		// 		$pass=htmlentities(addslashes($password));
		// 		$user=htmlentities(addslashes($iduser));
		// 		$pstm->execute(array($pass,$user));
		// 		$this->conn->commit();
		// 		return true;
		// 	}
		// 	catch(Throwable $t){ 
		// 		$this->conn->rollback();
		// 		throw $t;
		// 	}finally{
		// 		$pstm=null;
		// 		$this->conn=null;
		// 	}
		// }

		// public function cambiarPassAlumno($codigo,$password) { //Restablece pass de alumno
		// 	try{
		// 		$sql="update alumno set contrasenia=? where coduniv=? ";
		// 		$this->conn->beginTransaction(); 
		// 		$pstm=$this->conn->prepare($sql);				
		// 		$pass=htmlentities(addslashes($password));
		// 		$user=htmlentities(addslashes($codigo));
		// 		$pstm->execute(array($pass,$user));
		// 		$this->conn->commit();
		// 		return true;
		// 	}
		// 	catch(Throwable $t){
		// 		$this->conn->rollback();
		// 		throw $t;
		// 	}finally{
		// 		$pstm=null;
		// 		$this->conn=null;
				
		// 	}
		// }

	}

?>
