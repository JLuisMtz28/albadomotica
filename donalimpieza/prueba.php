<?php
// Iniciar sesión
session_start();

// Obtener los datos de la sesión
$nombre = $_SESSION['chapa'];
$email = $_SESSION['chaparubio777@hotmail.com'];

// Dirección de correo electrónico del destinatario
$para = 'a3519110011@alumno.uttehuacan.edu.mx';

// Asunto del correo
$asunto = 'Datos de la sesión';

// Mensaje del correo
$mensaje = "Nombre: $nombre \n" .
           "Email: $email";

// Cabeceras del correo
$headers = 'From: chaparubio777@hotmail.com' . "\r\n" .
           'Reply-To: chaparubio777@hotmail.com' . "\r\n" .
           'X-Priority: 1' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Enviar el correo
mail($para, $asunto, $mensaje, $headers);
?>