<?php require_once RUTA_APP . '/views/inc/header.php'; ?>


<div class="container" style="font-style: oblique;">
<div class="card" 
	style="width: 24rem; background-color: #EEFBFB; margin: auto;">
  <img class="card-img-top" src="<?php echo RUTA_URL; ?>/images/icono_contactenos.png" 
  	alt="Card image cap" style="width: 60%; height: 50%; margin: auto;" 
  	class="rounded mx-auto d-block"> 
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;"><b>Contactenos</b></h5>
    <p class="card-text">
 <form method="post" action="" id="formContacto">
  <div class="form-group">
    <label>Correo Electronico: </label>
    <input type="email" class="form-control" id="txtEmail" name="txtEmail" 
    	aria-describedby="emailHelp" placeholder="Ingrese su E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Asunto: </label>
    <input type="text" class="form-control" id="txtAsunto" name="txtAsunto" 
    	placeholder="Asunto">
  </div>
  <div class="form-group">
    <label>Mensaje: </label>
    <textarea class="form-control"></textarea>
  </div>
  <center>
  <input type="submit" name="btnContacto" value="Guardar" 
  	class="btn-sm btn-outline-dark">
  </center>
</form>
    </p>
  </div>
</div>
</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>
