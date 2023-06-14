<?php
$nombre = $_POST['fullname'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$asunto = $_POST['affair'];
$mensaje = $_POST['message'];

$fechaHora = date('Y-m-d H:i:s');

$datos =  "Fecha y Hora:       " . $fechaHora . "\r\n";
$datos .= "Nombre:             " . $nombre . "\r\n";
$datos .= "Correo Electrónico: " . $email . "\r\n";
$datos .= "Número Celular:     " . $telefono . "\r\n";
$datos .= "Asunto:             " . $asunto . "\r\n" ;
$datos .= "Mensaje:            " . $mensaje . "\r\n";
$datos .= "________________________________________________________________________________________________\r\n";
$datos .= "\r\n";

file_put_contents("datos.txt", $datos, FILE_APPEND);

header('Location:FORM.HTML')

?>
