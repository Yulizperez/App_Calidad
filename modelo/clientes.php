<?php
	include_once ("database.php");
		class Cliente{
			private $pdo;
			public $id;
			public $nombre;
			public $apellidos;
			public $telefono;
			public $correo_electronico;
			public $categoria_id;

			public $row;

			public function __construct(){
				$this->pdo=Database::Open();
			}

			public function listar(){
				try{
				$sql ="select clientes.*, categorias.nombre categoria from clientes join categorias on clientes.categoria_id = categorias.id";
				$stm=$this->pdo->prepare($sql);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);

			}catch(Exception $e){
				die($e->getMessage());
			}
			
			}

			public function buscar($id){
			try{
				$sql="select * from clientes where id=".$id;
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
					clientes(nombre,apellidos,telefono,correo_electronico,categoria_id) values(?,?,?,?,?)";
					$stm = $this->pdo->prepare($sql);
					$stm->execute(array(
						$this->nombre,
						$this->apellidos,
						$this->telefono,
						$this->correo_electronico,
						$this->categoria_id
						));
				}else{
					$sql="update clientes
					set nombre=?,apellidos=?,telefono=?, correo_electronico=?,categoria_id=? where id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->execute(array(
						$this->nombre,
						$this->apellidos,
						$this->telefono,
						$this->correo_electronico,
						$this->categoria_id,
						$this->id
					));
				}
			}catch(Exception $e){
				die($e->getMessage());
			}
		}
		
		public function eliminar($id){
			try{
				$sql="delete from clientes where id=".$id;
				$stm=$this->pdo->prepare($sql);
				$stm->execute();
				return "El registro se ha eliminado";
			}catch(Exception $e){
				die($e->getMessage()).__LINE__;
			}
		}

	}


?>