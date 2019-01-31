<?php 
session_start();
include_once '../../Model/Login.php';
if ($_SESSION['logueadoUser'] == TRUE) {
	$usuario = $_SESSION[nombreUser];
    $data['datos'] = Login::getDatosUsuario($usuario);
	foreach ($data['datos'] as $datosUser) {
		$idCliente=$datosUser->getCodCliente();
	}
	try{
	$pdo = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8', 'root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM reserva WHERE codHabitacion = :habitacion)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
            ':habitacion' => $_GET["idHab"]));
	catch {
		echo "<label>nonsucessfull</label>";
	}
			
			
?>