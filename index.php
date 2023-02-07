<?php
date_default_timezone_set('America/Mexico_City');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include("includes/templates/head.php");
    tittle("Inicio");
    ?>
    <link rel="stylesheet" href="css/estilos_paginaweb.css">
</head>

<body style="background: lightgray; font-size: 20px; line-height: 25px; margin:0; font-family:'Raleway', sans-serif;">

    <!--<menu>-->
    <?php
    include("includes/templates/menu.php");
    ?>
    <!--</menu>-->
    <main class="main">
        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light">
            <h1 class="mb-3 h2">Encuestas de Analisis Empresarial</h1>
            <p class="mb-3">Seleccione una para comenzar</p>
        </div>
        <!-- Jumbotron -->
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="my-5">
        <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Indicador de gestión del proceso administrativo</h5>
                <p class="card-text">
                El indicador de gestión del proceso administrativo (IGPA) es un instrumento de índole cuantitativo que mide la implementación del proceso administrativo dentro de las organizaciones.
                </p>
                <img src="img/procesoadmin.jpg" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Habilidades Directivas</h5>
                <p class="card-text">
                  <br>Encuestas disponibles <br><br>
                  Diagnóstico de la Comunicación de Apoyo<br> 
                  Evaluación del Manejo del estres<br>
                  Solución Creativa de Problemas<br>
                  Ganar Poder e Influencia<br>
                  Uso de estrategias de influencia<br>
                  Diagnóstico para Motivar a los Demás<br>
                  Manejo de Conflictos Interpersonales<br>
                  Facultamiento y Delegación Eficaces<br>
                  Facultamiento Personal<br>
                  Desarrollo de Equipos<br>
                  Necesidad de Formación de Equipos<br>
                  Liderar el cambio positivo<br>
                </p>
              </div>
            </div>
          </div>
        </div>

        
      <!--Section: Content-->

                    <!--Grid column-->

                    <hr class="featurette-divider">
                    <br>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-6">
                            <div class="card bg-light">
                                <img src="img/encuesta.jpg" class="card-img-top img-fluid" alt="Responsive image">
                                <div class="card-body">
                                    <h5 class="card-title text-center font-bold" style="color:#3D708D;"><strong>Encuesta para Empresas</strong></h5>
                                    <a href="MenuEncuestas.php" class="btn btn-pill text-white" style="background-color:#3D708D;">Empezar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-6">
                            <div class="card bg-light">
                                <img src="img/quienessomos.jpg" class="card-img-top img-fluid" alt="Responsive image">
                                <div class="card-body">
                                    <h5 class="card-title text-center font-bold" style="color:#3D708D;"><strong>¿Quiénes somos?</strong></h5>
                                    <a href="QuienesSomos.php" class="btn btn-pill text-white" style="background-color:#3D708D;">Conocenos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <hr class="featurette-divider">

                    <section id="contact" class="contacto featurette text-center">
                        <div class="card-deck">
                            <div class="card bg-light" style="padding:0;">
                                <div class="card-body">
                                    <h4 class="card-title">Horarios</h4>
                                    <h5 class="card-text"><i class="fas fa-university mr-3"></i> Facultad de Negocios y Tecnologías</h5>
                                    <h5 class="card-text"><i class="fas fa-calendar-day mr-3"></i> Lunes a Viernes </h5>
                                    <h5 class="card-text"><i class="far fa-clock mr-3"></i> 10:00 a 14:00 hrs </h5>
                                </div>
                            </div>
                            <div class="card bg-light" style="padding:0;">
                                <div class="card-body">
                                    <h4 class="card-title">Contacto</h4>
                                    <h5 class="card-text"><i class="fas fa-user mr-3"> </i> Dr. Omar Juárez Rivera </h5>
                                    <h5 class="card-text"><i class="far fa-envelope mr-3"> </i> <a href="mailto:ojuarez@uv.mx">ojuarez@uv.mx</a> </h5>
                                    <h5 class="card-text"><i class="fas fa-phone-square-alt mr-3"> </i> (272) 728 08 15 </h5>
                                </div>
                            </div>
                            <div class="card bg-light" style="padding:0;">
                                <div class="card-body">
                                    <h4 class="card-title">Ubicación</h4>
                                    <h5 class="card-text"><i class="fas fa-university mr-3"></i> Campus Ixtaczoquitlán</h5>
                                    <h5 class="card-text"><i class="fas fa-map-marked-alt mr-3"></i> Carretera Estatal Sumidero - Dos Rios, Km 1, Ixtaczoquitlán Veracruz, México. </h5>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <hr class="featurette-divider">
                    <br>
                </div>

                <div id="map-container-google-1" class="z-depth-1-half map-container" frameborder="0" style=" border:0;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15097.588004549558!2d-97.03804447812368!3d18.913813817912317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x985793c74db2ba34!2sUniversidad%20Veracruzana!5e0!3m2!1ses!2smx!4v1606370225482!5m2!1ses!2smx" width="100%" height="425" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

        </main>

        <!-- Footer -->
        <footer class="page-footer font-small" style="background-color:#09080E; padding:5px 0 0;">
            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5 text-muted">
                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">ADN Empresarial</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-user-check mr-3"></i> <a href="MenuEncuestas.php">Registrate</a> para poder acceder a la encuesta
                        </p>
                        <hr>
                        <h6 class="text-uppercase font-weight-bold">Acerca de</h6><br>
                        <p>
                            <i class="fas fa-users mr-3"></i><a href="QuienesSomos.php">Conócenos</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-user mr-3"></i> Dr. Omar Juárez Rivera
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i><a href="mailto:ojuarez@uv.mx">ojuarez@uv.mx</a>
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> +52 (272) 728 08 15
                        </p>
                        <p>
                            <i class="fas fa-calendar-day mr-3"></i> Lunes a Viernes de 10:00 a 14:00 hrs
                        </p>

                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Ubicación</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-university mr-3"></i> Facultad de Negocios y Tecnologías. Campus Ixtac.
                        </p>
                        <p>
                            <i class="fas fa-map-marked-alt mr-3"></i> Carretera Estatal Sumidero - Dos Rios, Km 1, Ixtaczoquitlán Veracruz, México.
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <!-- Grid row -->
            </div>
            <!-- Footer Links -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-secondary" style="background-color:#000000;">© 2020 Copyright: MDBootstrap.com
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

</body>

</html>