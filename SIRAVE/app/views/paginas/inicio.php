<?php

require_once RUTA_APP . '/views/inc/header.php';

?>

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img4.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img6.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>

<div class="container">
<div class="row">
<nav class="navigation">
  <ul class="mainmenu">
    <li><a href="">Vehiculos</a>
      <ul class="submenu">
        <li class="nav-item">
          <a href="<?php echo RUTA_URL;?>/VehiculoController/FormVehiculo">
          Registro de Vehiculos</a></li>
        <li class="nav-item">
          <a href="">Registro de Reservas de vehiculo</a></li>
      </ul>
    </li>
    <li><a href="">Usuarios</a>
      <ul class="submenu">
        <li class="nav-item">
          <a href="<?php echo RUTA_URL;?>/UsuarioController/mostrarFormRegistroUsuario">
          Registro de Usuarios</a>
        </li>
         <li class="nav-item">
          <a href="<?php echo RUTA_URL;?>/UsuarioController/listadoUsuarios">
          Listado de Usuarios</a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="<?php echo RUTA_URL;?>/OfertaController/FormOferta">Ofertas</a>
    </li>
    <li class="nav-item">
      <a href="<?php echo RUTA_URL;?>/GamaController/FormGama">Gamas</a>    
    </li>
  </ul>
</nav>
</div>
</div>


<?php
require_once RUTA_APP . '/views/inc/footer.php';
?>

</div>


<script type="text/javascript" src="<?php echo RUTA_APP; ?>/js/src/carousel.js"></script>

