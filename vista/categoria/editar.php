<form action="<?php echo BASEURL;?>categoria/Guardar" method="POST">
	<h2 align="center">Agregar Nueva Categoría</h2>

	<br>
    <input type="hidden" name="id" value="<?php echo $data->id;?>">
    <br> 

    
    
    Nombre de Categoría: <input required type="text" name="nombre" class="validate" value="<?php echo $data->nombre;?>">
	<input type="submit" name="Guardar" value="Guardar">
	<br>
	<br>
	


	

</form>