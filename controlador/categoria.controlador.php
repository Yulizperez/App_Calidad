<?php

include_once("modelo/categorias.php");

class CategoriaControlador{
	private $modelo;

	public function __construct(){
		$this->modelo = new Categoria();

            }

	public function index(){
		$data = $this->modelo->listar();
		include_once("vista/encabezado.php");
		include_once("vista/categoria/index.php");
		include_once("vista/pie.php");
	}

	public function Nuevo(){
		$data=$this->modelo;
		include_once("vista/encabezado.php");
		include_once("vista/categoria/agregar.php");
		include_once("vista/pie.php");
		

	}

	public function Editar($id){
		$data = $this->modelo->buscar($id);
		include_once("vista/encabezado.php");
		include_once("vista/categoria/Editar.php");
		include_once("vista/pie.php");

	}

	public function Guardar(){
		$this->modelo->id=$_POST['id'];
		$this->modelo->nombre=$_POST['nombre'];
		$this->modelo->guardar();
		$this->index();
	}
	
	public function Eliminar($id)
	{
		$this->modelo->eliminar($id);
		$this->index();

	}
}
?>