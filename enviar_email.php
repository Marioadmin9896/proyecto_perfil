<?php

//correo a donde llegue el msj
$destinatario = 'tapiaayalamariogmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la pagina de Mario Tapia Ayala";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $pais, $mensajeCompleto, $header);


echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>