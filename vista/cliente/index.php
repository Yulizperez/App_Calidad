<div align="right">
</div>
<h2 align="center">Tabla de Cliente</h2>
<a alingn="left" class="boton" href="<?php echo BASEURL;?>/Clientes/Nuevo/agregar.php" role="button" ><th>Nuevo</a>
<table class="table table-hover responsive-table">
<colgroup>
	<col span="6" style="background-color: ">
</colgroup>

</caption>

	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Telefóno</th>
		<th>Correo Electrónico</th>
		<th>Categoría</th>
	</thead>
	<tbody>
	<?php 
	foreach ($data as $obj) {
		?>
		<tr>
			<td><?php echo $obj->id;?></td>
			<td><?php echo $obj->nombre;?></td>
			<td><?php echo $obj->apellidos;?></td>
			<td><?php echo $obj->telefono;?></td>
			<td><?php echo $obj->correo_electronico;?></td>
			<td><?php echo $obj->categoria;?></td>
		<td>
			<th><a href="<?php echo BASEURL;?>Clientes/Editar/<?php echo $obj->id;?>" role="button" class="small material-icons">Editar</a>

			
			<th>
			<a href="<?php echo BASEURL;?>Clientes/Eliminar/<?php echo $obj->id;?>" role="button"">Eliminar</a>

		</tr>
		<?php
	}
	?>
	</tbody>
	</table>
