<?php

include("modelo/clientes.php");
include("modelo/categorias.php");
class ClientesControlador{
	private $modelo;
	private $modelocategoria;

	public function __CONSTRUCT(){
		$this->modelo=new Cliente();
		$this->modelocategoria = new Categoria();
	}

	public function index(){
		$data=$this->modelo->listar();
		include_once("vista/encabezado.php");
		include_once("vista/cliente/index.php");
		include_once("vista/pie.php");
	}

	public function Nuevo(){
		$data = $this->modelo;
		$categorias = $this->modelocategoria->listar();
		include_once("vista/encabezado.php");
		include_once("vista/cliente/agregar.php");
		include_once("vista/pie.php");
		

	}

	public function Editar($id){
		$data = $this->modelo->buscar($id);
		$categorias = $this->modelocategoria->listar();
		include_once("vista/encabezado.php");
		include_once("vista/cliente/editar.php");
		include_once("vista/pie.php");

	}

	public function Guardar(){
		$this->modelo->id=$_POST['id'];
		$this->modelo->nombre=$_POST['nombre'];
		$this->modelo->apellidos=$_POST['apellidos'];
		$this->modelo->telefono=$_POST['telefono'];
		$this->modelo->correo_electronico=$_POST['correo_electronico'];
		$this->modelo->categoria_id=$_POST['categoria_id'];
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