<?php require_once RUTA_APP . '/views/inc/header.php'; ?>


<div class="container">

<div class="card" style="margin: auto; width: 32rem; ">
  <h5 class="card-header" style="text-align: center;"><b>Nuevo Usuario</b></h5>
  <div class="card-body">
    <h5 class="card-title" 
    	style="text-align: center; font-style: oblique;">Ingrese datos del Nuevo Usuario
    </h5>
    <p class="card-text" style="margin-bottom: 10%;">
    	<form method="POST" action="<?php echo RUTA_URL; ?>/RolController/agregarRol">
    		<div class="form-group">
    			<label for="nombre">Nombre: </label>
    			<input type="text" class="form-control" name="txtNombre" 
    				placeholder="Ingrese Nombre"></input>
    		</div>
    		<div class="form-group">
    			<label for="Descripcion">Descripcion: </label>
    			<textarea class="form-control" name="descripcion"></textarea>
    		</div>
    		<div class="form-group">
    			<label for="emial">Seleccione Usuario: </label>
                <select name="cbUsuario" class="form-control">
                    <?php foreach($datos['usuarios'] as $usu) : ?>
                        <option value="<?php echo $usu->int_id_usuario;?>">
                            <?php echo $usu->str_nombre; ?>
                        </option>
                    <?php endforeach; ?>
                </select>	
    		</div>
    		
    		<button type="submit" name="btnAgregar" 
    			class="btn-sm btn btn-outline-primary">
    			<i class="fa fa-save"></i> Agregar Rol		
    		</button>
    	</form>
    </p>
    <a href="<?php echo RUTA_URL; ?>/PaginasController" 
    	class="btn-sm btn btn-outline-success" style="margin-left: 85%;">
    	<i class="fa fa-backward"></i> Volver
    </a>
  </div>
</div>

</div>

<?php require_once RUTA_APP . '/views/inc/header.php'; ?>