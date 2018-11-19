<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container">
  <center>
	<div class="card" style="width: 18rem; background-color: #E7EFF1; margin-top: 30px;">
      <div class="card-body">
        <h5 class="card-title"><b>INICI0 SESIÓN</b></h5>
        <h6 class="card-subtitle mb-2 text-muted"></h6>
        <form method="post" action="controladores/usuario_Controlador.php" >
        <p class="card-text">          
            <div class="form-group">
              <label><b>Email: </b></label>
              <input type="email" class="form-control" id="textUsu" 
                placeholder="Ingrese Email">
            </div>
            <div class="form-group">
              <label><b>Contraseña: </b></label>
              <input type="password" class="form-control" id="psdClave" 
                placeholder="Ingrese contraseña">
            </div>          
        </p>
          <button type="submit" name="btnEntrar" 
            class="btn-sm btn btn-outline-primary">
            <i class="fa fa-sign-in"></i> Entrar
          </button>
          <a href="<?php echo RUTA_URL; ?>/UsuarioController/mostrarFormRegistroUsuario"
            class="btn-sm btn btn-outline-success">
            <i class="fa fa-sign-out"></i> Registrarse
          </a>           
        </form>
      </div>
</div>
</center>
</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>
