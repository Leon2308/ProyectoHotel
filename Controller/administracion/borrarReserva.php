<?php
session_start();  //empezar sesion 
if ($_SESSION['logueadoAdmin'] == true) { //si la sesion fue iniciada correctamente
require_once 'compruebaDB.php';
require_once '../../Model/Reserva.php';

$fecha = "fechaEntrada= '$_POST[fechaEntrada]'";

Reserva::deleteReserva($_POST['codHabitacion'], $_POST['codCliente'], $fecha);

require_once './obtieneListaReservas.php';
}else {
    header("location:../../Controller/administracion/login.php");
}