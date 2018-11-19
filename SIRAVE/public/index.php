<?php

$Page_Title = 'SIRAVE';

$Page = 'Inicio';

//Cargamos el iniciador.php del directorio app
require_once '../app/iniciador.php';

require_once RUTA_APP . '/views/inc/header.php';

//Instancias la clase controlador
$iniciar = new Core();

?>

<div class="container">   

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>

</div>


<script type="text/javascript" src="public/assets/js/src/carousel.js"></script>

