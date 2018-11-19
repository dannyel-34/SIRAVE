<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container">
	
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Nombre</th>
	      <th scope="col">Descripcion</th>
	      <th scope="col">Usuario</th>
	      <th colspan="3"></th>
	    </tr>
	  </thead>
	  <tbody>
	   <?php foreach($datos['roles'] as $rol) : ?>
	   		<tr>
	   			<td><?php echo $rol->nombre; ?></td>
	   			<td><?php echo $rol->descripcion; ?></td>
	   			<td><?php echo $rol->str_nombre; ?></td>
	   			<td>
	   				<a href="<?php echo RUTA_URL; ?>/RolController/editar/<?php echo $rol->int_id_rol; ?>"
              			class="btn-sm btn btn-outline-warning">
              			<i class="fa fa-edit"></i>     
            		</a>
	   			</td>
	   			<td>
	   				<a href="<?php echo RUTA_URL; ?>/RolController/eliminar/<?php echo $rol->int_id_rol; ?>"
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