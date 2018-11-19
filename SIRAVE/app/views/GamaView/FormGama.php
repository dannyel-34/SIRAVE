<?php 

$Page = 'gamaForm';

require_once RUTA_APP . '/views/inc/header.php';

?>

<div class="container">
  <center>
	<div class="card" style="width: 32rem;">
    <h1><b>Nueva Gama</b></h1>
      <div class="card-body" >
      	<form method="post" action="">
      		  <div class="form-group">
                <label>Nombre: </label>
                <input type="text" class="form-control" id="txtNomGama" 
                    placeholder="Ingrese nombre de gama" name="txtNomGama">
            </div>
            <div class="form-group">
                <label>Tipo de Gama: </label>
                <select name="cbTipoGama" class="form-control">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label>Descripcion: </label>
                <textarea class="form-control" 
                	id="txtDescripcion" rows="3" name="txtDescripcion"></textarea>
            </div>

            <button type="submit" name="btnGuardar" id="btnGuardar"
              class="btn-sm btn btn-outline-primary" value="Guardar">
              <i class="fa fa-save fa-lg"></i> Guardar
              </button> |
              
            <a href="<?php RUTA_URL;?>mostrarGamas" 
              class="btn-sm btn btn-outline-success">
              <i class="fa fa-undo fa-lg"></i> Ir atras
            </a>     
      	</form>
      </div>
  	</div>
</center>

</div>


<?php 
    require_once RUTA_APP . '/views/inc/footer.php'; 
?>