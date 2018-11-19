<?php require_once RUTA_APP . '/views/inc/header.php'; ?>


<div class="container">

<div class="card" style="margin: auto; width: 32rem; ">
  <h5 class="card-header" style="text-align: center;">
    <b>Editar Usuario: </b> N° <?php echo $datos['id_usuario']; ?>
</h5>
  <div class="card-body">
    <p class="card-text" style="margin-bottom: 10%;">
    	<form method="POST" action="<?php echo RUTA_URL;?>/UsuarioController/editarUsuario/<?php echo $datos['id_usuario']; ?>">
    		<div class="form-group">
    			<label for="nombre">Ingrese Nombre de Usuario: </label>
    			<input type="text" class="form-control" 
                    name="txtNombre" value="<?php echo $datos['nombre']; ?>" 
    				placeholder="Ingrese Nombre"></input>
    		</div>
    		<div class="form-group">
    			<label for="nombre">Ingrese Apellido de Usuario: </label>
    			<input type="text" class="form-control" 
                    name="txtApellido" value="<?php echo $datos['apellido']; ?>" 
    				placeholder="Ingrese Apellido"></input>
    		</div>
    		<div class="form-group">
    			<label for="emial">Ingrese E-mail de Usuario: </label>
    			<input type="email" class="form-control" 
                    name="txtEmail" value="<?php echo $datos['email']; ?>"
    				placeholder="Ingrese E-mail"></input>
    		</div>
    		<div class="form-group">
    			<label for="Telefono">Ingrese Numero de Telefono y/o Celular: </label>
    			<input type="text" class="form-control" 
                name="txtTelefono" value="<?php echo $datos['telefono']; ?>"></input>
    		</div>
    		<div class="form-group">
    			<label for="password">Ingrese Contraseña: </label>
    			<input type="password" class="form-control" 
                    name="pwdPassword" value="<?php echo $datos['password']; ?>"></input>
    		</div>
    		<button type="submit" name="btnEditar" 
    			class="btn-sm btn btn-outline-primary">
    			<i class="fa fa-edit"></i> Editar Usuario		
    		</button>
    	</form>
    </p>
    <a href="<?php echo RUTA_URL; ?>/UsuarioController" 
    	class="btn-sm btn btn-outline-success" style="margin-left: 85%;">
    	<i class="fa fa-backward"></i> Volver
    </a>
  </div>
</div>

</div>

<?php require_once RUTA_APP . '/views/inc/header.php'; ?>