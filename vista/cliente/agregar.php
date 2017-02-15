<!-- Vista para añadir un nuevo cliente-->
<form action="../Guardar" method="POST">
    <fieldset>
    <input type="hidden" name="id" value="<?php echo $data->id;?>"> 
    <br>
    <label for="nombre">Nombre</label>
    
    <input required type="text" name="nombre" class="validate" value="<?php echo $data->nombre;?>">
    </br>

    <label for="apellidos">Apellidos </label>
    <br>
    <input required type="apellidos" name="apellidos" class="validate" value="<?php echo $data->apellidos;?>">
    </br>

    <label for="telefono">Telefóno</label>
    <br>
    <input type="text" name="telefono" value="<?php echo $data->telefono;?>">
    </br>

     <label for="correo_electronico" >Email</label>
    <br>
    <input required type="text" name="correo_electronico" value="<?php echo $data->correo_electronico;?>">
    </br>

    <label for="categoria_id">ID Categoria</label>
    <br>
    <select name="categoria_id" id="">
        <?php foreach ($categorias as $cat) : ?>
            <option value="<?= $cat->id ?>"><?= $cat->nombre ?></option>
        <?php endforeach; ?> 
    </select>
    </br>
    <br>
    <input type="submit" name="Guardar" value="Salvar"><br>
</fieldset>
</form>
