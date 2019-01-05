<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?= $nombreHotel->nombreHotel?> - Confirmar reserva</title>
        <link rel="stylesheet" type="text/css" href="../../View/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../../View/img/favicon.png">
    </head>
    <body class="fondoCuerpo">

        <div class="logo"><img class="logo" src="../../View/img/uploads/<?=$logo->nombre?>"></div>
        <div class="login-block">
            <h1>Confirmar reserva</h1>
            <?= $error ?>

            <?php
            foreach ($data['datos'] as $datosUser) {
                ?>
                <form action="reservaConfirmada.php" name="confirmarReserva" method="POST">
                    <input type="hidden"  name="codHabitacion" value="<?= $codHabitacion ?>">
                    <input type="hidden"  name="codCliente" value="<?= $datosUser->GetCodCliente() ?>">
                    <input type="hidden"  name="probando2" value="test2">
					 <label for="male">Cédula</label>
                    <input type="text"  name="dni" id="dni" value="<?= $datosUser->GetDNI() ?>" readonly>
					 <label for="male">Nombre</label>
                    <input type="text"  name="nombre" id="nombre" value="<?= $datosUser->GetNombre() ?>" readonly>
					<?php if($datosUser->GetApellido2()!=''){ ?>
					 <label for="male">Primer Apellido</label>
                    <input type="text"  name="apellido1" id="apellido1" value="<?= $datosUser->GetApellido1() ?>" readonly>
					 <label for="male">Segundo Apellido</label>
                    <input type="text"  name="apellido2" id="apellido2" value="<?= $datosUser->GetApellido2() ?>" readonly>
					<?php }else { ?>
					 <label for="male">Apellido</label>
                    <input type="text"  name="apellido1" id="apellido1" value="<?= $datosUser->GetApellido1() ?>" readonly>
					<input type="hidden"  name="apellido2" id="apellido2" value="<?= $datosUser->GetApellido2() ?>" readonly>
					<?php } ?>
					 <label for="male">Fecha de Entrada</label>
                    <input type="text"  name="fechaEntrada"  id="fechaEntrada" value="<?= $fechaEntrada ?>" readonly>
					 <label for="male">Fecha de Salida</label>
                    <input type="text"  name="fechaSalida" id="fechaSalida" value="<?= $fechaSalida ?>" readonly>
                    <button type="submit">Confirmar</button>
                </form>
                <?php
            }
            ?>
        </div>

    </body>
</html>