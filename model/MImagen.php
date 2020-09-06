<?php
	
	class MImagen {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();		
			}catch(Exception $e){
				throw $e;				
			}
		}

		public function registrar($nombre,$route_img) {
			try{
				$sql="INSERT INTO pelicula (nombre,route_img) values (?,?)";
				$this->conn->beginTransaction();
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($nombre,$route_img));
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
