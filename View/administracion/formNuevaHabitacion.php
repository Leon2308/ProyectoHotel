<?php
  session_start();
  if ($_SESSION['logueadoAdmin']){
?>
<div class="panel panel-primary">
    <div class="panel-heading cabeceraDivForm">Nueva habitación</div>
    <div class="cuadroForm">
        <form action="" class="formCentrado" id="formNuevaHabitacion" method="post">
            <div class="form-group">
                <label for="codHabitacionNuevo">codHabitacion:</label>
                <input type="text" name="codHabitacion" id="codHabitacionNuevo" class="form-control" disabled value="">
            </div>

			<p></p>
            <div class="form-group">
                <label for="tipoNuevo">Tipo:</label>
                <!--   <input type="text" name="tipo" id="tipoNuevo" class="form-control"> -->
 <select style="width: 180px" name="tipo" id="tipoNuevo" class="form-control">
                        <option value="Familiar" selected="">Familiar</option>
                        <option value="Doble" selected="">Doble</option>
                        <option value="Individual">Individual</option>
                </select>
            </div>
				<p></p>
				
            <p></p>
            <div class="form-group">
                <label for="capacidadNuevo">Capacidad:</label>
            <!--     <input type="text" name="capacidad" id="capacidadNuevo" class="form-control"> -->
                   <select style="width: 180px" name="capacidad" id="capacidadNuevo" class="form-control">
                        <option value="5">5</option>
                        <option value="4" selected="">4</option>
                        <option value="3" selected="">3</option>
                        <option value="2" selected="">2</option>
                        <option value="1" selected="">1</option>
                </select>
            </div>
            <p></p>
            
            <p></p>
            <div class="form-group">
                <label for="plantaNuevo">Planta:</label>
              <!--  <input type="text" name="planta" id="plantaNuevo" class="form-control"> -->
                <select style="width: 180px" name="planta" id="plantaNuevo" class="form-control">
                        <option value="3">3</option>
                        <option value="2" selected="">2</option>
                        <option value="1" selected="">1</option>
                </select>
            </div>
            <p></p>

            <div class="form-group">
                <label for="tarifaNuevo">Tarifa:</label>
                <input type="text" name="tarifa" id="tarifaNuevo" class="form-control">
            </div>
        </form>
    </div>
</div>
<?php
    }else{
        //Error, mensaje, redirección...
        echo "Zona Inaccesible. Requiere Inicio de sesión"; //Mensaje de prueba
    }