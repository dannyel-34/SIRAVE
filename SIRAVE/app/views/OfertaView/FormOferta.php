<?php 

$Page = 'ofertaForm';

require_once RUTA_APP . '/views/inc/header.php';

?>

<div class="container">
    <center>
	<div class="card" style="width: 32rem;">
        <br>
        <h1><b>Nueva Oferta</b></h1>
      <div class="card-body">
      		<div class="form-group">
                <label>Nombre: </label>
                <input type="text" class="form-control" id="txtNomOferta" 
                    placeholder="Ingrese nombre de Oferta" name="txtNomOferta">
            </div>
            <div class="form-group">
                <label>Precio: </label>
                <input type="text" class="form-control" id="txtPrecioOferta" 
                    placeholder="Ingrese Precio de Oferta" name="txtPrecioOferta">
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
              
            <a href="<?php RUTA_URL;?>mostrarOfertas" 
              class="btn-sm btn btn-outline-success">
              <i class="fa fa-undo fa-lg"></i> Ir atras
            </a> 
      </div>
  </div>
</center>


</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>