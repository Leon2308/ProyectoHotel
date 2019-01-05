<?php
session_start();   //empezar sesion 
if ($_SESSION['logueadoAdmin'] == true) {  // si la sesion es iniciada
require_once 'compruebaDB.php';
require_once '../../Model/Reserva.php';

$reservaAux = new Reserva($_POST[codHabitacion], $_POST[codCliente], $_POST[fechaEntrada], $_POST[fechaSalida], "", "", "", ""); //se crea un atributo para guardar la reseva de la habitacion 

$reservaAux->modReserva($_POST[fechaEntradaHidden]);

require_once '../../Controller/administracion/obtieneListaReservas.php';
}else {
    header("location:../../Controller/administracion/login.php");
}