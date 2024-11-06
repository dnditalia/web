<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$numero = $_POST['numero'];

$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",/r/n";
$mensaje .= "Su e-mail es: " . $mail . "/r/n"
$mensaje .= "Su numero de telefno es: " . $numero . "/r/n"
$mensaje .= "El asunto es: ". $asunto . "/r/n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "/r/n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'tinchorotolo@gmail.com';
$asunto = 'Prueba de la fase inicial';




mail($para, $asunto, utf8_decode($mensaje), $header);


header('google.com');

?>