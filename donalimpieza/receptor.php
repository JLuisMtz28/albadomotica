

<?php



error_reporting(E_ERROR | E_PARSE);
session_start();

$valor = $_POST['input'];



// Dirección de correo electrónico del destinatario
$para = ''.$valor.'';

// Asunto del correo
$asunto = 'Confirmación de pago';

// Mensaje del correo
$mensaje = "Correo de confirmación de pago en la pagina Doña Limpieza, Muchas gracias por su confianza


Pago de 250$ MXN
";

// Cabeceras del correo
$headers = 'From: 202089791@viep.com.mx' . "\r\n" .
           'Reply-To: 202089791@viep.com.mx' . "\r\n" .
           'X-Priority: 1' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Enviar el correo
if(mail($para, $asunto, $mensaje, $headers)){
  echo ("<script> window.location='index.php'; </script>");
   
   
  
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doña limpieza</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  
  
<script src="sweetalert2.all.min.js"></script>
  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<form action="" method="post">


<label> ¿A donde quieres mandar la confirmación de tu pago?</label>
<br><br>
<input type="email" class="form" name="input" placeholder="Ingresa tu correo" >

<br><br>

<button type="submit">Enviar</button>



</form>






