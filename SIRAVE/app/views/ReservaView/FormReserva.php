<?php 
    
    $Page = 'reservaForm';

    require_once RUTA_APP . '/views/inc/header.php';
?>


<div class="container">
    <div class="card">
      <div class="card-body">
        <form method="post" action="">
            <div class="form-group">
                <label>Codigo: </label>
                <input type="text" class="form-control" id="txtCodReserva" 
                    placeholder="Ingrese Codigo de la Reserva" name="txtCodReserva">
            </div>
            <div class="form-group">
                <label>Fecha Entrega: </label>
                <input type="datetime" class="form-control" id="dtmEntrega" 
                    placeholder="Ingrese Fecha de Entrega" name="dtmEntrega">
            </div>
            <div class="form-group">
                <label>Fecha Devolucion: </label>
                <input type="datetime" class="form-control" id="dtmDevolucion" 
                    placeholder="Ingrese Fecha de Devolucion" name="dtmDevolucion">
            </div>
             <div class="form-group">
                <label>Fecha Devolucion: </label>
                <select name="cbPlan">
                    <option value=""></option>
                </select>
            </div>
             <div class="form-group">
                <label>Dias a Reservar: </label>
                <input type="number" class="form-control" id="nbrDias" 
                    placeholder="Ingrese dias a Reservar" name="nbrDias">
            </div>
            <input type="submit" name="btnGuardar" id="btnGuardar" 
                class="btn btn-outline-primary"> |
            <input type="submit" name="btnAtras" id="btnAtras" 
                class="btn btn-outline-success">   
        </form>
      </div>
    </div>
</div>


<?php 
    require_once RUTA_APP . '/views/inc/footer.php'; 
?>