

<?php 
include("conexion.php");
$con = conectar();


$id = $_GET['id'];

$sql = "SELECT *  from personal where id=$id";
$query = mysqli_query($con, $sql);


session_start();
  
$valor = $_POST['miCampo'];

$_SESSION['usuario'] = $valor;



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detalles</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Doña Limpieza</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca De</a></li>
          <li><a class="nav-link scrollto" href="#services">Testimoniales</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li><a class="getstarted scrollto" href="login.php">Iniciar sesión</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <i class="bi bi-list mobile-nav-toggle"></i>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Datos personales</li>
        </ol>
        <h2>Doña limpieza</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


          <?php
            while ($row = mysqli_fetch_array($query)) {
                ?>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informacion Personal</h3>
             

              <img src="assets/img/usuarios/<?php echo $row["foto"]?>" widht="300px" height="300px"> 
              <br><br>
              <ul>
                <li><strong>Nombre</strong>: <?php echo $row["nombre"]," ", $row["apellidos"] ?></li>
                <li><strong>Calificación: </strong ><i style="color:yellow" class="bi bi-star-fill"></i><i style="color:yellow" class="bi bi-star-fill"></i><i  style="color:yellow"class="bi bi-star-fill"></i><i style="color:yellow" class="bi bi-star-fill"></i><i style="color:yellow" class="bi bi-star-half"></i></li>
                <li><strong>Costo de servicios: </strong> 250 $</li>
                <li><strong>Ubicación: </strong> Tehuacán, Puebla</li>
                

              </ul>
       
       <?php
$baseUrl = 'https://albadomotica.mx/donalimpieza';
?>


<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">

  <input type="hidden" name="business" value="vendedor@business.example.com">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" id="" value="Servicio de limpieza de <?php echo $row['nombre'],' ', $row['apellidos']?>"><br>
    <input type="hidden" name="amount" id="" value="250" ><br>
    <input type="hidden" name="currency_code" value="MXN">
    <input type="hidden" name="quantity" id="" value="1" ><br>

    <!-- Valores opcionales -->
    <!-- En el siguiente enlace puedes encontrar una lista completa de Variables HTML para pagos estándar de PayPal. -->
    <!-- https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/Appx-websitestandard-htmlvariables/ -->

    <input type="hidden" name="item_number" value="1">
    <!-- <input type="hidden" name="invoice" value="0012"> -->

    <input type="hidden" style="display:none" name="lc" value="es_ES">
    <input type="hidden" style="display:none" name="no_shipping" value="1">
    <input type="hidden" style="display:none" name="image_url" value="https://picsum.photos/150/150">
    <input type="hidden" style="display:none" name="return" value="<?= $baseUrl ?>/receptor.php">
    <input type="hidden" style="display:none" name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">


              <button class="button btn btn-primary" type="submit">Pagar ahora con Paypal</button>
                

</form>
            </div>
            <div class="portfolio-description">
              <h2>Sobre mi:</h2>
              <p>
                Me esfuerzo todos los dias y siempre termino el trabajo a tiempo   </p>
            </div>
          </div>

          <?php
            }

                ?>


        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Doña Limpieza</span>
            </a>
            <p>Consolidarnos como una empresa líder en contratación de amas de casa de manera virtual.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-tiktok"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nuestros enlaces</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terminos y servicios</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Acuerdos de privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> Limpieza</li>
              <li><i class="bi bi-chevron-right"></i> Trapeada</li>
              <li><i class="bi bi-chevron-right"></i> Planchada</li>
              <li><i class="bi bi-chevron-right"></i> Lavada</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contactanos</h4>
            <p>
              12 sur 1202<br>
              Mexico, Puebla 75700<br>
              
              <strong>Celular:</strong> +52 2382115594<br>
              <strong>Correo:</strong> doñalimpieza@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Doña Limpieza</span></strong> Todos los derechos reservados, 2023.
       </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>