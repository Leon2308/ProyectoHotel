<!DOCTYPE html>
<html lang="es">
    <head>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../../View/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
        <script src="../../View/js/usuario/registroView.js"></script>
        <link rel="icon" type="image/png" href="../../View/img/favicon.png">
        <meta charset="UTF-8">
        <title><?= $nombreHotel->nombreHotel?> - Iniciar sesión</title>
    </head>

    <body class="registroLogin">
        <div class="logo"><img class="logo" src="../../View/img/uploads/<?=$logo->nombre?>"></div>
        <div class="login-block">
            <h1>Login</h1>
            <?= $error ?>
            <form action="registrar.php" method="post" id="formRegistroUsusarios">
                <input type="text" name="dni" class="camposRegistroUsusarios" placeholder="Cedula" minlength="10" maxlength="10" autofocus=""/>
                <div id="salida"></div>
				<input type="text" name="nombre" class="camposRegistroUsusarios" placeholder="Nombre"/>
                <input type="text" name="apellido1" class="camposRegistroUsusarios" placeholder="Primer Apellido"/>
                <input type="text" name="apellido2" class="camposRegistroUsusarios" placeholder="Segundo Apellido"/>
                <input type="text" name="usuario"  class="camposRegistroUsusarios"  placeholder="Usuario"/>
                 <input type="password" name="clave" id="claveUser"  minlength="6" maxlength="16" placeholder="Contraseña"/>
                <input type="password" name="claveComprueba" class="camposRegistroUsusarios" minlength="8" maxlength="16" placeholder="Repetir Contraseña"/>
               <!-- <input type="text" name="usuario" id="nombreUser"  placeholder="Usuario"/> -->
               <!-- <input type="password" name="claveComprueba" id="claveUserComprueba" minlength="8" maxlength="16" placeholder=" Repetir Contraseña"/>-->
                <button type="submit">Registrarme</button>
            </form>
            <br>
            <a href="login.php"><button type="submit">Volver Atras</button></a>
        </div>
    </body>
</html>