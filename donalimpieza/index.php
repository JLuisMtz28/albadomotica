<?php
session_start();
 
// Eliminar todas las variables de sesión
session_unset();
 
// Cerrar sesión
session_destroy();


include("conexion.php");
$con = conectar();


$sql = "SELECT * from personal where rol='1'";
$query = mysqli_query($con, $sql);

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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Ofrecemos soluciones modernas a problemas cotidianos</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">¿Empezamos a limpiar?</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#team"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Comienza Ahora</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">

        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Nuestro Equipo</p>
        </header>

        <div class="row gy-4">

          <?php
          while ($row = mysqli_fetch_array($query)) {
            ?>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/usuarios/<?php echo $row['foto']?>" class="img-fluid" alt="" widht="100%" height="auto">
                  <div class="social">
                    <a target="_blank" href="https://www.facebook.com/chapita.rubio.9"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/chapitarubio/"><i class="bi bi-instagram"></i></a>
                    <a target="_blank" href="wa.me/+522382115594"><i class="bi bi-whatsapp"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>
                    <?php echo $row["nombre"], " ", $row["apellidos"] ?>
                  </h4>
                  <p>  Me esfuerzo todos los dias y siempre termino el trabajo a tiempo  </p>
                  <a href="detalles.php?id=<?php echo $row["id"]?>" class="btn-read-more">Contratar</a>
                </div>
              </div>
            </div>


            <?php
          }
          ?>

        </div>

      </div>

    </section><!-- End Team Section -->




    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>¿Como funciona?</h2>
              <p>
                El servicio de limpieza será ofrecido por amas de casa.
                Se dará capacitación a las amas de casa, para que ofrezcan un servicio de calidad.
                La confianza de los clientes será garantizado
                En la página podrá encontrar paquetes de servicio de limpieza que se ajusten más a sus necesidades.
                El costo del servicio le garantizara a los clientes la calidad del servicio. </p>
              <div class="text-center text-lg-start">
                <a href="#"
                  class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Leer más</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">

          <p>Como iniciar</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Empieza a Generar</h3>
              <p>Unete a nuestro equipo y empieza a ganar dinero</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Empieza a escalar</h3>
              <p>Obten la mejor calificacion y obten mejores ofertas</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Sé Eficiente</h3>
              <p>Ahorra tiempo y obten las mejores reseñas</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Usuarios Nuevos Diarios</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-chat-left-dots-fill" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Comentarios Positivos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-house" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="146" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Casas Limpias</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Miembros activos </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">

          <p>Testimoniales</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Milton Jair</h3>
              <p>Me encanto trabajar con doña limpieza, mi casa quedo tan limpia que podria ver mi reflejo en el piso
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Eduardo Reyes</h3>
              <p> Quede fascinada con el servicio que ofrece Doña Limpieza. Mi casa quedo reluciente.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Adriana Garcia</h3>
              <p>Excelente servicio de limpieza, el personal de Doña limpieza es confiable, altamente calificado y
                eficiente. Me encanto el resultado. Recomendado 100%.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Preguntas Frecuentes</p>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    ¿Qué puede hacer Doña Limpieza?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Doña Limpieza, realizará la limpieza general de toda tu casa. También podrás encontrar a personas
                    que te apoyen con lavado de ropa, planchar y cocinar. </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    ¿Cada cuándo puedo reservar? </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Puedes reservar tu servicio de limpieza a partir de 3 horas, con la frecuencia que lo necesites.
                    Desde un sólo servicio, una vez a la semana e incluso servicios urgentes.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    ¿Qué puedes solicitar en nuestros servicios?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Doña limpieza, realiza la limpieza general de tu casa. Las tareas de limpieza dependen de la
                    cantidad de horas que reserves. Sólo aplica lavado a máquina. </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    ¿Qué incluye el servicio de la cocina?
                  </button>
                </h2>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    El servicio que estamos ofreciendo es el Lavado de platos, Limpieza de microondas, Limpieza de
                    superficies, Barrido y fregado de pisos, Limpieza de electrodomésticos y Sacar la basura
                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-5">
                    ¿Qué incluye el servicio de áreas comunes?
                  </button>
                </h2>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Los servicios que estamos realizando para estas áreas es la Limpieza de polvo, Limpieza de
                    superficies, Barrido de pisos, Fregado de pisos y Sacar la basura. </div>
                </div>



                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq-content-6">
                      ¿Qué incluye el servicio de los baños?
                    </button>
                  </h2>
                  <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      La Limpieza de grifos, Limpieza de espejos, Recoger y doblar toallas, Barrido y fregado de
                      pisos, Limpieza de wc y regadera y Sacar la basura.
                    </div>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-content-7">

                        ¿Qué incluyen todas nuestras tarifas?
                      </button>
                    </h2>
                    <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                      <div class="accordion-body">
                        <ul>
                          <li>Transportes para llegar a tu servicio.</li>
                          <li>Equipo capacitado en limpieza.</li>
                          <li>Garantía de satisfacción.</li>
                          <li>Soporte durante y después de tu servicio.</li>
                        </ul>

                      </div>
                    </div>

                  </div>
                </div>



              </div>

            </div>

    </section><!-- End F.A.Q Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contacto</h2>
          <p>Contactanos</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Direccion</h3>
                  <p>12 sur 1202 <br>Mexico, Puebla 75700</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Llamanos</h3>
                  <p>+52 2382115594</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Mandanos un correo</h3>
                  <p>doñalimpieza@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Horario</h3>
                  <p>Lunes a Viernes <br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

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


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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