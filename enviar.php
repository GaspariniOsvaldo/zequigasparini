<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['email'];
$celular = $_POST['tel'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono es: " . $celular . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'gaspariniosvaldo1@gmail.com';
$asunto = 'Mensaje de mi sitio web Zequi Gasparini';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>