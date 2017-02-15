<?php
	include_once ("database.php");
class Categoria{
			private $pdo;
			public $id;
			public $nombre;
			
			public $row;

	public function __CONSTRUCT(){
				$this->pdo=Database::Open();
			}

			public function listar(){
				try{
				$sql ="select * from categorias";
				$stm=$this->pdo->prepare($sql);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);

			}catch(Exception $e){
				die($e->getMessage());
			}
			
			}

			public function buscar($id){
			try{
				$sql="select * from categorias where id=".$id;
				$stm=$this->pdo->prepare($sql);
				$stm->execute();
				return $stm->fetch(PDO::FETCH_OBJ);
			}catch(Exception $e){
				die($e->getMessage());
			}
			}

			public function guardar(){
			try{
				if($this->id==null){
					$sql="insert into 
					categorias(nombre) values(?)";
					$stm = $this->pdo->prepare($sql);
					$stm->execute(array(
						$this->nombre
					));
				}else{
					$sql="update categorias 
					set nombre=?where id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->execute(array(
						$this->nombre,
						$this->id
					));
				}
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

		public function eliminar($id){
			try{
				$sql="delete from categorias where id=".$id;
				$stm=$this->pdo->prepare($sql);
				$stm->execute();
				return "El registro se ha eliminado";
			}catch(Exception $e){
				die($e->getMessage()).__LINE__;
			}
		}


		}