<?php
require_once 'compruebaDB.php';
require_once("phpmailer/src/PHPMailer.php");
require_once("phpmailer/src/SMTP.php");
require_once("phpmailer/src/Exception.php");

if (isset($_POST["email"])) {
    $mail = new PHPMailer\PHPMailer\PHPMailer;                             
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contacto.hotelfuentealegre@gmail.com';                 // SMTP username
        $mail->Password = 'hcgzipjarxzwwiaf';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
		$mail->SMTPOptions = array(
		'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
			)
		);

        //Recipients
        $mail->setFrom('contacto.hotelfuentealegre@gmail.com','Hotel Fuente Alegre');
        $mail->addAddress('contacto.hotelfuentealegre@gmail.com', 'Contacto Hotel Fuente Alegre');
		$asunto ='Nuevo Comentario Hotel';
		
        //Content
		$cuerpo	= "<b>Remitente: </b> " . $_POST[nombre] . " " . $_POST[apellido1] .
            " " . $_POST[apellido2] ." 
			<br></br> <b>Email de Respuesta: </b> ".$_POST[email]."
			<br></br> <b>Comentario</b>: 
			<br></br> 
			". $_POST[comentario];
        $mail->isHTML(true);                                 
        $mail->Subject = $asunto;
        $mail->Body    = $cuerpo;

        $mail->send();
		$estado = "<small>Correo Enviado Exitosamente</small>";
    } catch (Exception $e) {
		echo "$e";
       $estado = "<small>No se pudo enviar el correo</small>";
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

