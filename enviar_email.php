<?php

if($_SERVER['REQUEST_METHOD']!= 'POST') {
	header("Location: index.html" );
}

//USO DEL ARCHIVO PHPMAILER//
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

//USO DE LA CLASE PHPMAILER

use PHPMailer\PHPMailer\PHPMailer;

/// VALORES QUE TOMA NAME DEL FORMULARIO///
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];

if ( empty(trim($nombre)) ) $nombre = 'anonimo';

$body = <<<HTML 
		<h1>Contacto desde la web</h1>
		<p>De: $nombre / $mail</p>
		<h2>Mensaje</h2>
		$mensaje
HTML;

$mailer = new PHPMailer();

$mailer->setFrom($mail, "$nombre");
$mailer->addAddress('tapiaayalamario@gmail.com','Sitio web');
$mailer->Subject = "Mensaje web del pais: $pais";
$mailer->msgHTML($body);
$mailer->Altbody = strip_tags($body); // caso que no acepte html, strip tags elimina etiquetas html

$rta = $mailer->send(); // enviar mail

var_dump($rta);

?>