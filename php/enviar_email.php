<?php

/// VALORES QUE TOMA NAME DEL FORMULARIO///
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$pais= $_POST['pais'];
$texto = $_POST['mensaje'];



//ENCABEZADO DE LA PERSONA QUIEN ENVIO EL EMAIL//

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


/// MENSAJE DEL EMAIL ////

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Del pais : " .$pais . " \r\n";
$mensaje .= "Mensaje: " .$_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'tapiaayalamario@gmail.com'; //MI CORREO//
$asunto = 'Mensaje de mi sitio web'; // MSJ DE MI CORREO//

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location : https://mariotapiaayala.netlify.app"); // TE REGRESA AL INDEX DE LA PAGINA//
?>

?>