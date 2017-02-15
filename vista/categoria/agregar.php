<form action="<?php echo BASEURL;?>categoria/Guardar" method="POST">
	<h2 align="center">Agregar Nueva Categoría</h2>

	<br>
    <input type="hidden" name="id" value="<?php echo $data->id;?>">
    <br> 

    <label for="nombre">Nombre</label>
    
    <input required type="text" name="nombre" class="validate" value="<?php echo $data->nombre;?>">

 
	<br>
	<input type="submit" name="Guardar" value="Salvar">
	<br>


	

</form>
  
