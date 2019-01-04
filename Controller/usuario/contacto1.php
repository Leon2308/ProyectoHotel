<?php
require_once 'compruebaDB.php';
if ($_POST[accion] == enviar) {
    /*$para = "contacto.hotelfuentealegre@gmail.com";
    $titulo = 'Contacto Hotel';
    $mensaje = "Nombre: " . $_POST[nombre] . "apellido1: " . $_POST[apellido1] .
            " " . $_POST[apellido2] ." Comentario: ". $_POST[comentario]."";
    $cabeceras = 'From: ' . $_POST[email] . '';
*/
    //$bol = mail($para, $titulo, $mensaje, $cabeceras);
	$to = "contacto.hotelfuentealegre@gmail.com";
	$subject = "HTML email";

	$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$_POST["email"].'>' . "\r\n";

$bol=mail($to,$subject,$message,$headers,'-f'.$_POST["email"].'');

    if ($bol) {
        $estado = "Enviado";
    } else {
        $estado = "No enviado";
    }
}

require_once '../../Model/datosHotel.php';
    
    $idImgLogo = "logoHotel";
 
    $logo = datosHotel::getNombreImagen($idImgLogo);
  
$nombreHotel = datosHotel::getNombreDelHotel(); 

$idImagenSocial = array("facebook", "googlePlus", "instagram", "twitter");

    $estadoImg = array(
        'facebook' => datosHotel::getEstadoImagen($idImagenSocial[0]),
        'googlePlus' => datosHotel::getEstadoImagen($idImagenSocial[1]),
        'instagram' => datosHotel::getEstadoImagen($idImagenSocial[2]),
        'twitter' => datosHotel::getEstadoImagen($idImagenSocial[3]), 
    );
    
    $idImagen2 = array("facebook", "googlePlus", "instagram", "twitter");
    
    $urlSociales = array(
        'facebook' => datosHotel::getUrlSocial($idImagen2[0]),
        'googlePlus' => datosHotel::getUrlSocial($idImagen2[1]),
        'instagram' => datosHotel::getUrlSocial($idImagen2[2]),
        'twitter' => datosHotel::getUrlSocial($idImagen2[3]),  
    );
require_once '../../View/usuario/contactoView.php';

