<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container">
<center>
	<div class="card" style="width: 30rem; margin-top: 38px; background-color: #EBF3F3;">
	  <div class="card-body">
	    <center>
	    	<h5 class="card-title"><b>Eliminar Vehiculo: 
	    	<?php echo $datos['int_id_vehiculo'];?></b></h5>
	    </center>
	    <form  method="POST"
	    	action="<?php echo RUTA_URL; ?>/VehiculoController/eliminarVehiculo/<?php echo $datos['int_id_vehiculo']; ?>">
	    	<p class="card-text">		
			  <div class="form-group">
			    <label for="Matricula">Matricula</label>
			    <input type="text" 
			    	class="form-control" readonly="readonly"
			    	name="txtMatricula" value="<?php echo $datos['matricula'];?>">
			  </div>
			  <div class="form-group">
			    <label for="Modelo">Modelo: </label>
			    <input type="text" class="form-control" 
			    	name="txtModelo" readonly="readonly" 
			    	value="<?php echo $datos['modelo'];?>">
			  </div>
			  <div class="form-group">
			    <label for="Marca">Marca: </label>
			    <input type="text" class="form-control" 
			    	name="txtMarca" readonly="readonly" 
			    	value="<?php echo $datos['marca'];?>">
			  </div>
			  <div class="form-group">
			    <label for="Clase">Clase: </label>
			    <input type="text" class="form-control" 
			    	name="txtClase" readonly="readonly" 
			    	value="<?php echo $datos['clase'];?>">
			  </div>
			  <div class="form-group">
			    <label for="Placa">Placa: </label>
			    <input type="text" 
			    	class="form-control" readonly="readonly"
			    	name="txtPlaca" name="txtPlaca" value="<?php echo $datos['placa'];?>">
			  </div>
			  <div class="form-group">
			  	<label for="Estado Actual">Estado Actual:</label>
			  	<br>
			    <div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="customRadioInline1" name="rdbEstado" 
				  	class="custom-control-input" value="Activo">
				  <label class="custom-control-label" 
				  	for="customRadioInline1">Activo</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="customRadioInline2" name="rdbEstado" 
				  	class="custom-control-input" value="Inactivo">
				  <label class="custom-control-label" 
				  	for="customRadioInline2">Inactivo</label>
				</div>
			  </div>

			  <div class="form-group">
			    <label for="Valor Tarifa">Valor Tarifa</label>
			    <input type="text" name="txtValor_Tarifa" 
			    	class="form-control" readonly="readonly"
			    	value="<?php echo $datos['tarifa'];?>">
			  </div>
	    	</p>
	    
		    <button type="submit" name="btnEditar" 
		    	class="btn btn-outline-primary" id="btnEditar">
		    	<i class="fa fa-trash"></i> Eliminar Vehiculo
		    </button>

	    </form><br>

	    <a href="<?php echo RUTA_URL; ?>/VehiculoController" class="btn-sm btn btn-success">
			<i class="fa fa-backward"></i> Volver
		</a>
	    
	    
	  </div>
	</div>

</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>

