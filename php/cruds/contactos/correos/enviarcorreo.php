<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Tomar los datos del formulario
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comments = $_POST["comments"];

$body = "
<div class='container'>
    <h1>¡Hola!</h1>
    <h2>En este correo resolveremos todos tus dudas.</h2>
    
    <h3>Nombre: $name</h3>
    <h3>Teléfono: $phone</h3>
    <h3>Correo: $email</h3>
    <h3>Comentarios: $comments</h3>
    
    <h3>Puedes domotizar como desees y adaptarlo a tus necesidades.</h3>
    <h3>Si tienes alguna pregunta, no dudes en volver a contactarnos.</h3>
    
    <h1>¡Gracias!</h1>
</div>
";

echo $body;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'youremail@email.com';                  //SMTP username
    $mail->Password   = 'two-stepverification';                 //SMTP password - two-step verification
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('youremail@email.com', 'user');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->charset = 'UTF-8';
    //$mail->Subject = 'Información sobre Domotizar mi Hogar';
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>
        alert("El Mensaje se envió Correctamente");
        windows.history.go(-1);
        </script>';
} catch (Exception $e) {
    echo "No se pudo enviar el Mensaje: {$mail->ErrorInfo}";
}
?>