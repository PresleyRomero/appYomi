<?php
	
	class MLogin {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();		
			}catch(Exception $e){
				throw $e;				
			}
		}

		// public function buscarUsuario(){ 
		// 	$usuario=null;
		// 	try {
		// 		$sql="select * from alumno where (coduniv= ? or dni= ?) and contrasenia=BINARY ?"; //casteo a BINARY = case sensitive
		// 		$pstm=$this->conn->prepare($sql);
		// 		$user=htmlentities(addslashes($_POST["txtuser"]));				
		// 		$pass=htmlentities(addslashes($_POST["txtpass"]));
		// 		$pstm->execute(array($user,$user,$pass));
		// 		if ($fila=$pstm->fetch(PDO::FETCH_ASSOC)){ 
		// 			$usuario=array();
		// 			$usuario=$fila;
		// 		}
		// 		return $usuario;				
		// 	} catch(Exception $e){
		// 		throw $e;
		// 	}finally{
		// 		$pstm=null;
		// 		$this->conn=null;
		// 	}		
		// }

		// public function buscarDni(){ 
		// 	$usuario=null;
		// 	try {
		// 		$sql="select idalumno,email from alumno where dni= ? ";
		// 		$pstm=$this->conn->prepare($sql);
		// 		$dni=htmlentities(addslashes($_POST["txtdni"]));
		// 		$pstm->execute(array($dni));
		// 		if ($fila=$pstm->fetch(PDO::FETCH_ASSOC)){ 
		// 			$usuario=array();
		// 			$usuario=$fila;
		// 		}
		// 		return $usuario;				
		// 	} catch(Exception $e){
		// 		throw $e;
		// 	}finally{
		// 		$pstm=null;
		// 		$this->conn=null;
		// 	}		
		// }

		public function buscarUsuario2(){ //ADMIN
			$usuario=null;
			try {
				$sql="select * from user where usuario= ? and contrasenia=BINARY ?";
				$pstm=$this->conn->prepare($sql);
				$user=htmlentities(addslashes($_POST["txtuser"]));
				$pass=htmlentities(addslashes($_POST["txtpass"]));
				$pstm->execute(array($user,$pass));
				if ($fila=$pstm->fetch(PDO::FETCH_ASSOC)){ 
					$usuario=array();
					$usuario=$fila;
				}
				return $usuario;				
			} catch(Exception $e){
				throw $e;
			}finally{
				$pstm=null;
				$this->conn=null;
			}		
		}

		// public function buscarUsuario3(){ //ADMIN
		// 	$usuario=null;
		// 	try {
		// 		$sql="select * from user where usuario=?";
		// 		$pstm=$this->conn->prepare($sql);
		// 		$user=htmlentities(addslashes($_POST["txtuser"]));
		// 		$pstm->execute(array($user));
		// 		if ($fila=$pstm->fetch(PDO::FETCH_ASSOC)){ 
		// 			$usuario=array();
		// 			$usuario=$fila;
		// 		}
		// 		return $usuario;				
		// 	} catch(Exception $e){
		// 		throw $e;
		// 	}finally{
		// 		$pstm=null;
		// 		$this->conn=null;
		// 	}		
		// }

		// public function cambiarPass($idalumno,$password) { //ALUMNO
		// 	try{
		// 		$sql="update alumno set contrasenia=? where idalumno=? ";
		// 		$this->conn->beginTransaction(); 
		// 		$pstm=$this->conn->prepare($sql);				
		// 		$pass=htmlentities(addslashes($password));
		// 		$user=htmlentities(addslashes($idalumno));
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

		public function cambiarPassAdmin($iduser,$password) { //ADMIN
			try{
				$sql="update user set contrasenia=? where idusuario=? ";
				$this->conn->beginTransaction(); 
				$pstm=$this->conn->prepare($sql);				
				$pass=htmlentities(addslashes($password));
				$user=htmlentities(addslashes($iduser));
				$pstm->execute(array($pass,$user));
				$this->conn->commit();
				return true;
			}
			catch(Throwable $t){ 
				$this->conn->rollback();
				throw $t;
			}finally{
				$pstm=null;
				$this->conn=null;
			}
		}


	}

?>
