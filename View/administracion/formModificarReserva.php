<?php
  session_start();
  if ($_SESSION['logueadoAdmin']){
?>
<div class="panel panel-primary">
    <div class="panel-heading cabeceraDivForm">Modificación de reservas</div>
      
             <form action="modificarReserva.php" id="formReservar" class="formCentrado" method="post">
      
    </div>
</div>
<?php
    }else{
        //Error, mensaje, redirección...
        echo "Zona Inaccesible. Requiere Inicio de sesión"; //Mensaje de prueba
    }