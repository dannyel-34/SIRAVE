<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container">
	
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellido</th>
	      <th scope="col">E-mail</th>
	      <th scope="col">Telefono</th>
	      <th colspan="3"></th>
	    </tr>
	  </thead>
	  <tbody>
	   <?php foreach($datos['usuarios'] as $usu) : ?>
	   		<tr>
	   			<td><?php echo $usu->str_nombre; ?></td>
	   			<td><?php echo $usu->str_apellido; ?></td>
	   			<td><?php echo $usu->str_email; ?></td>
	   			<td><?php echo $usu->str_telefono; ?></td>
	   			<td>
	   				<a href="<?php echo RUTA_URL; ?>/UsuarioController/editarUsuario/<?php echo $usu->int_id_usuario; ?>"
              			class="btn-sm btn btn-outline-warning">
              			<i class="fa fa-edit"></i>     
            		</a>
	   			</td>
	   			<td>
	   				<a href="<?php echo RUTA_URL; ?>/UsuarioController/eliminarUsuario/<?php echo $usu->int_id_usuario; ?>"
              			class="btn-sm btn btn-outline-danger">
              			<i class="fa fa-trash"></i>     
            		</a>
	   			</td>
	   		</tr>
	   <?php endforeach; ?>
	  </tbody>
	</table>


</div>


<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>