<?php

/*FRIENDLY-URL*/
$url=explode('/',@$_GET['url']);
$seccion=(!empty($url[0])?$url[0]:'Clientes');
$a=(!empty($url[1])?$url[1]:'index');
$args=(!empty($url[2])?$url[2]:null);
if(file_exists("controlador/".$seccion.".controlador.php")){
	include_once("controlador/".$seccion.".controlador.php");
	$clase=ucwords($seccion)."Controlador";
	$controlador=new $clase;
	if (method_exists($controlador, $a)) {
		if ($args==null) {
			$controlador->{$a}();
		}else
			$controlador->{$a}($args);
	}else{
		echo "<h1>Error: Acceso a una ruta existente";
	}
}else{
		echo "<h1>Error: Acceso a una accion existente";
}
?>