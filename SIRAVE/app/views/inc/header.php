<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo NOMBRESITIO;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <!-- CSS -->
      <link rel="stylesheet" 
        href="<?php echo RUTA_URL; ?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" 
        href="<?php echo RUTA_URL; ?>/assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" 
        href="<?php echo RUTA_URL; ?>/assets/css/estilos.css">
      <link rel="stylesheet" 
        href="<?php echo RUTA_URL; ?>/assets/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/assets/css/main.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">          
    </head>
    <body>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php RUTA_URL; ?>">Sirave v 1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" 
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">        
              <li class="<?php echo $Page == 'inicio' ? 'nav-item' : ''; ?>">              
                <a class="nav-link" href="<?php echo RUTA_URL;?>/PaginasController">Inicio</a>
              </li> 

              <li class="<?php if ($Page =='Nosotros'){ echo 'nav-item';} ?>">
                <a class="nav-link" href="<?php echo RUTA_URL; ?>/PaginasController/mostrar_FormNosotros">Nosotros</a>
              </li>   

              <li class="<?php if ($Page =='Contacto'){ echo 'nav-item';} ?>">
                <a class="nav-link" href="<?php echo RUTA_URL; ?>/PaginasController/mostrar_FormContacto">Contacto</a>
              </li>      
  
              <li class="<?php if ($Page =='LoginForm'){ echo 'nav-item';} ?>">
                <a class="nav-link" href="<?php RUTA_URL; ?>UsuarioController/index">Entrar</a>
              </li> 

              <li class="nav-item">
                <a class="nav-link"> | </a>
              </li>

              <li class="<?php if ($Page =='RegistroView'){ echo 'nav-item';} ?>">
                <a class="nav-link" href="<?php echo RUTA_URL; ?>/UsuarioController/mostrarFormRegistroUsuario">Registrarse</a>
              </li>
          </ul>
      </div>
  </nav>
<body>



   




