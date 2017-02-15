<h2 align="center">Tabla de Categorías</h2>
<div align="right">
<a class="boton" href="<?php echo BASEURL;?>/Categoria/Nuevo" role="button" ><th>Nuevo</a>
</div>
<table class="table table-hover responsive-table">

</caption>

	<thead>
		<th>ID</th>
		<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
	
	<?php foreach ($data as $obj)  {
		?>
		<tr>
			<td><?php echo $obj->id;?></td>
			<td><?php echo $obj->nombre;?></td>
		<td>
			<th><a href="<?php echo BASEURL; ?>Categoria/Editar/<?php echo $obj->id;?>" role="button">Editar</a>
			<th>

			<th>
			<a href="<?php echo BASEURL;?>Categoria/Eliminar/<?php echo $obj->id;?>">Eliminar</a>
		</tr>
		<?php
	}
	?>
	</tbody>
	</table>
