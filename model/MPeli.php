<?php
	
	class MPeli {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();		
			}catch(Exception $e){
				throw $e;				
			}
		}

		public function registrar($nombre, $frase, $desc, $route_img, $idcateg, $lstactores) {
			try{
				$sql="insert into pelicula (nombre, frase, descripcion, route_img, idcategoria) values (?,?,?,?,?)";
				$this->conn->beginTransaction(); 
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($nombre, $frase, $desc, $route_img, $idcateg));
				$sql2="select LAST_INSERT_ID() idpelicula";
				$rs=$this->conn->query($sql2);
				$id=$rs->fetchAll(PDO::FETCH_ASSOC);
				$idpelicula=$id[0]["idpelicula"];
				for ($i=0; $i < count($lstactores); $i++) { 
					$this->registrarPeliActor($idpelicula,$lstactores[$i],$this->conn);
				}
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

		public function registrarPeliActor($idpelicula, $idactor, $con) { //detalle
			try{
				$sql="insert into peli_actor (idpelicula, idactor) values (?,?)";
				$pstm=$con->prepare($sql);
				$pstm->execute(array($idpelicula, $idactor));
				return true;
			}
			catch(Throwable $t){ 
				throw $t;
			}finally{
				$pstm=null;
				// $this->conn=null;
			}
		}

		public function modificarPeli($idpeli, $nombre, $frase, $desc, $idcateg, $lstactores) {
			try{
				$sql="update pelicula set nombre=?, frase=?, descripcion=?, idcategoria=? where idpelicula=?";
				$this->conn->beginTransaction(); 
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($nombre, $frase, $desc, $idcateg, $idpeli));
				$sql2="delete from peli_actor where idpelicula=?"; // Eliminamos previamente todos los detalles peli_actor de esta peli
				$pstm2=$this->conn->prepare($sql2);
				$pstm2->execute(array($idpeli));				
				for ($i=0; $i < count($lstactores); $i++) { 
					$this->registrarPeliActor($idpeli,$lstactores[$i],$this->conn); // volvemos a registrar los detalles
				}
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

		public function modificarImgPeli($idpeli, $route_img) {
			try{
				$sql="update pelicula set route_img=? where idpelicula=?";
				$this->conn->beginTransaction(); 
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($route_img, $idpeli));				
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

		public function listarPelis($idcat){
			try{
				$sql="SELECT p.idpelicula, p.nombre, p.frase, p.descripcion, p.route_img, GROUP_CONCAT(a.nombres SEPARATOR '?') actores FROM pelicula p INNER JOIN peli_actor pa ON pa.idpelicula=p.idpelicula INNER JOIN actor a on a.idactor=pa.idactor WHERE p.idcategoria=$idcat GROUP BY p.idpelicula ORDER BY p.idpelicula desc";
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

		public function obtenerPeli($idpeli){
			try{
				$sql="SELECT p.idpelicula, p.nombre, p.frase, p.descripcion, p.route_img, p.idcategoria, GROUP_CONCAT(pa.idactor SEPARATOR '?') actores FROM pelicula p INNER JOIN peli_actor pa ON pa.idpelicula=p.idpelicula where p.idpelicula=".$idpeli." GROUP BY p.idpelicula ORDER BY p.idpelicula desc";
				$rs=$this->conn->query($sql);
				$resultado=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $resultado[0];				
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
