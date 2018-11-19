<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container">
<center>
	<div class="card" style="width: 30rem; margin-top: 38px; background-color: #EBF3F3;">
	  <div class="card-body">
	    <center><h5 class="card-title"><b>Registrar Vehiculo</b></h5></center>
	    <form  method="POST"
	    	action="<?php echo RUTA_URL; ?>/VehiculoController/agregarVehiculo">
	    	<p class="card-text">		
			  <div class="form-group">
			    <label for="Matricula">Matricula</label>
			    <input type="text" class="form-control" 
			    	name="txtMatricula" placeholder="Ingrese Matricula">
			  </div>
			  <div class="form-group">
			    <label for="Modelo">Modelo: </label>
			    <input type="text" class="form-control" 
			    	name="txtModelo" name="txtModelo" placeholder="Ingrese Modelo">
			  </div>
			  <div class="form-group">
			    <label for="Marca">Marca: </label>
			    <input type="text" class="form-control" 
			    	name="txtMarca" name="txtMarca" placeholder="Ingrese Marca">
			  </div>
			  <div class="form-group">
			    <label for="Clase">Clase: </label>
			    <input type="text" class="form-control" 
			    	name="txtClase" name="txtClase" placeholder="Ingrese Clase de Vehiculo">
			  </div>
			  <div class="form-group">
			    <label for="Placa">Placa: </label>
			    <input type="text" class="form-control" 
			    	name="txtPlaca" name="txtPlaca" placeholder="Ingrese Placa">
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
			    <input type="text" name="txtValor_Tarifa" class="form-control">
			  </div>

			   <!--<div class="form-group">
			    <label>Seleccione Imagen del Vehiculo</label>
			    <div class="custom-file">
  					<input type="file" class="custom-file-input" 
  						id="customFile">
  					<label class="custom-file-label" for="customFile">
  						Agrege Imagen</label>
			    </div>
			  </div>-->
	    	</p>
	    
	    <button type="submit" name="btnGuardar" 
	    	class="btn btn-outline-primary" id="btnGuardar">
	    	<i class="fa fa-save"></i> Agregar Vehiculo	
	    </button>

	    </form><br>

	    <a href="<?php echo RUTA_URL; ?>/VehiculoController" class="btn-sm btn btn-success">
			<i class="fa fa-backward"></i> Volver
		</a>
	    
	    
	  </div>
	</div>

</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>

