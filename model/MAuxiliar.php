<?php 

	class MAuxiliar {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();	
			}catch(Exception $e){
				throw $e;				
			}
		}	

		public function listarActores(){
			try{
				$sql="select * from actor order by nombres";
				$rs=$this->conn->query($sql);
				$lst=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lst;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}	
		}

		public function listarCategorias(){
			try{
				$sql="SELECT * FROM categoria ORDER BY idcategoria";
				$rs=$this->conn->query($sql);
				$lst=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lst;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}	
		}

	

	}

 ?>

