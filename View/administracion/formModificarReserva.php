<?php
  session_start();
  if ($_SESSION['logueadoAdmin']){
?>
<div class="panel panel-primary">
    <div class="panel-heading cabeceraDivForm">Modificación de reservas</div>
      
            
      
    </div>
</div>
<?php
    }else{
        //Error, mensaje, redirección...
        echo "Zona Inaccesible. Requiere Inicio de sesión"; //Mensaje de prueba
    }