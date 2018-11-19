<?php  require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container">

<center>
<a href="<?php echo RUTA_URL; ?>/VehiculoController/nuevoVehiculo" 
  class="btn-sm btn btn-info" style="margin: auto;">
  <i class="fa fa-plus fa-lg"></i> Nuevo Vehiculo
</a>
</center>

<br><br>

<div class="row">
  <?php foreach($datos['vehiculos'] as $vehiculo): ?>
  <div class="col-sm-4">
    <center>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><b>N°: </b><?php echo $vehiculo->int_id_vehiculo; ?></h5>
        <p class="card-text">
          <p><b>Marca: </b><?php echo $vehiculo->str_marca; ?></p>
          <p><b>Modelo: </b><?php echo $vehiculo->str_modelo; ?></p>
          <p><b>Matricula: </b><?php echo $vehiculo->str_matricula; ?></p>
          <p><b>Clase: </b><?php echo $vehiculo->str_clase; ?></p>

          <p>           
            <?php if($vehiculo->str_estado == 'Activo' || $vehiculo->str_estado == 'activo'){ ?>          
              <b>Estado: </b>
              <span class="badge badge-pill badge-success">
                <?php echo $vehiculo->str_estado; ?>
              </span>
            <?php }else if($vehiculo->str_estado == 'Inactivo' || $vehiculo->str_estado == 'inactivo'){ ?>
              <b>Estado: </b>
              <span class="badge badge-pill badge-danger">
                <?php echo $vehiculo->str_estado; ?>  
              </span> 
            <?php }?>
          </p>

          <p><b>Placa: </b><?php echo $vehiculo->str_placa; ?></p>

          <p><b>Valor Tarifa: </b><?php echo $vehiculo->tarifa; ?></p>
          
          <p>

            <a href="<?php echo RUTA_URL; ?>/VehiculoController/editarVehiculo/<?php echo $vehiculo->int_id_vehiculo; ?>"
              class="btn btn-outline-warning">
              <i class="fa fa-edit"></i>     
            </a>
            
            <a href="<?php echo RUTA_URL;?>/VehiculoController/eliminarVehiculo/<?php echo $vehiculo->int_id_vehiculo;?>"
              class="btn btn-outline-danger">
              <i class="fa fa-trash"></i>     
            </a>

          </p>
        </p>
      </div>
    </div>
    <br>
  </div>
  </center>
<?php endforeach; ?>

</div>


</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>