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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray; font-size: 20px; line-height: 25px; margin:0; font-family:'Raleway', sans-serif;">

    <!--<menu>-->
    <?php
    include("includes/templates/menu.php");
    ;
    ?>

    <!--</menu>-->
    <main class="main">

        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light">
            <h1 class="mb-3 h2">Bienvenido a ADN Empresarial</h1>
            <p class="mb-3">'En ADN Empresarial, nuestro objetivo es potenciar el talento directivo de tu empresa y
                llevarlo al siguiente nivel. Nos enorgullecemos de ofrecer una plataforma especializada en cuestionarios
                de habilidades directivas diseñados para identificar y desarrollar el liderazgo excepcional en tus
                equipos.'</p>
        </div>

        <?php
        $contenidos = array(
            array(
                'titulo' => 'Habilidades Personales',
                'descripcion' => '<table class="table">
                                    <tr>
                                        <td colspan="3">A1. Desarrollo del autoconocimiento</td>
                                    </tr>
                                    <tr>
                                        <td>A.11 Evaluación de la inteligencia emocional</td>
                                        <td>A12 Determinación de valores y prioridades</td>
                                        <td>A13 Identificación del estilo cognoscitivo</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>A14 Evaluación de la actitud hacia el cambio</td>
                                        <td></td>
                                        <td>A15 Comprensión de la autoevaluación básica y esencial</td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">A2. Manejo de Estres Personal</td>
                                    </tr>
                                    <tr>
                                        <td>A21 Como afectar los factores estresantes</td>
                                        <td>A22 Administración del tiempo</td>     
                                        <td>A23 Desarrollo de elasticidad</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">A3. Solución analítica y creativa de problemas</td>
                                    </tr>
                                    <tr>
                                        <td>A31 Uso del enfoque racional</td>
                                        <td>A32 Uso del enfoque creativo</td>
                                        <td>A33 Fomento a la innovación en los demás</td>
                                    </tr>
                                </table>',
                'enlace' => 'hbPersonales.php', // Agrega aquí el enlace para el primer item

            ),
            array(
                'titulo' => 'Habilidades InterPersonales',
                'descripcion' => '<table class="table">
                                    <tr>
                                        <td colspan="3">B1. Comunicación de apoyo ​</td>
                                    </tr>
                                    <tr>
                                        <td>B11 Coaching</td>​
                                        <td>B12 Consultoría u orientación </td>​                                      
                                        <td>B13 Escucha ​</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">B2. Ganar poder e influencia ​ ​</td>
                                    </tr>
                                    <tr>
                                    <td>B21 Ganar poder</td>​

                                    <td>B22 Ejercer influencia ​</td>
                                    
                                    <td>B23 Incrementar autoridad</td> ​
                                    </tr>
                                    <tr>
                                        <td colspan="3">B3. Motivación ​ ​</td>
                                    </tr>
                                    <tr>
                                        <td>B31 Diagnóstico de un bajo desempeño ​ ​</td>​
                                        <td> B32 Creación de un entorno motivador  </td>​                                      
                                        <td> B33 Recompensa de logros ​</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">B4. Manejo de conflictos ​</td>
                                    </tr>
                                    <tr>
                                        <td>B41 Identificación de las fuentes ​​</td>​
                                        <td>B42 Selección de estrategias ​ </td>​                                      
                                        <td>B43 Resolución de confrontaciones ​</td>
                                    </tr>
                                </table>',
                                'enlace' => 'hbInterpersonales.php', // Agrega aquí el enlace para el primer item

            ),
            array(
                'titulo' => 'Habilidades Grupales',
                'descripcion' => '<table class="table">
                                    <tr>
                                        <td colspan="3">C1. Facultamiento y delegación  ​</td>
                                    </tr>
                                    <tr>
                                        <td>C11 Facultar a los demás ​</td>​
                                        <td>C12 Delegación ​ </td>​                                      
                                        <td>C13 Poder compartido​</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">C2. Formación de equipos de trabajo ​ ​ ​</td>
                                    </tr>
                                    <tr>
                                    <td>C21 Evaluación del desarrollo de equipos ​</td>​

                                    <td>C22 Trabajo en equipos​ ​</td>
                                    
                                    <td>C23 Fomento del liderazgo efectivo en equipos</td> ​
                                    </tr>
                                    <tr>
                                        <td colspan="3">C23 Fomento del liderazgo efectivo en equipos​ ​</td>
                                    </tr>
                                    <tr>
                                        <td>C31 Creación de una desviación positiva ​​</td>​
                                        <td>C32 Liderar el cambio positivo​ </td>​                                      
                                        <td>C33 Movilización de las habilidades de los demás​</td>
                                    </tr>
                                </table>',
                                'enlace' => 'hbGrupales.php', // Agrega aquí el enlace para el primer item

            ),

            // Agrega más contenidos si es necesario
        );
        ?>

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
                                        El indicador de gestión del proceso administrativo (IGPA) es un instrumento de
                                        índole cuantitativo que mide la implementación del proceso administrativo dentro
                                        de las organizaciones.
                                    </p>
                                    <img src="img/procesoadmin.jpg" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Indicador de gestión del proceso administrativo</h5>
                                    <ul>
                                        <br>
                                        <li><a href="Presentacion.php#queEs" style="text-decoration: none;">¿Qué es?
                                            </a></li>
                                        <br>
                                        <li><a href="Presentacion.php#comoSeMide" style="text-decoration: none;">¿Cómo
                                                se mide?</a></li>
                                        <br>
                                        <li><a href="Presentacion.php#componentes" style="text-decoration: none;">Los
                                                componentes</a></li>
                                        <br>
                                        <li><a href="Presentacion.php#paraQueSirve" style="text-decoration: none;">¿Para
                                                qué sirve?</a></li>
                                        <br><br>
                                        <a href="MenuEncuestas.php"
                                            class="btn btn-primary btn-lg text-white font-weight-bold"
                                            style="margin-top: 50px;">REGISTRATE</a><br>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 ">
                            <div class="col-lg-12 mb-4">
                                <div id="carouselExampleIndicators"
                                    class="carousel slide bg-white carousel carousel-fade" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php for ($i = 0; $i < count($contenidos); $i++) { ?>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"
                                                <?php echo ($i === 0) ? 'class="active"' : ''; ?>></li>
                                        <?php } ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php foreach ($contenidos as $index => $contenido) { ?>
                                            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 offset-md-3 text-center">
                                                            <h3>
                                                                <?php echo $contenido['titulo']; ?>
                                                            </h3>
                                                            <div class="table-responsive">
                                                                <?php echo $contenido['descripcion']; ?>
                                                            </div>
                                                            <!-- Agregar el enlace alrededor de la sección del carrusel -->
                                                            <a href="<?php echo $contenido['enlace']; ?>"
                                                                class="btn btn-primary">Ir a los Cuestionarios</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </div>
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
                            <h5 class="card-title text-center font-bold" style="color:#3D708D;"><strong>Encuesta
                                    para Empresas</strong></h5>
                            <a href="MenuEncuestas.php" class="btn btn-pill text-white"
                                style="background-color:#3D708D;">Empezar</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-6">
                    <div class="card bg-light">
                        <img src="img/quienessomos.jpg" class="card-img-top img-fluid" alt="Responsive image">
                        <div class="card-body">
                            <h5 class="card-title text-center font-bold" style="color:#3D708D;"><strong>¿Quiénes
                                    somos?</strong></h5>
                            <a href="QuienesSomos.php" class="btn btn-pill text-white"
                                style="background-color:#3D708D;">Conocenos</a>
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
                            <h5 class="card-text"><i class="fas fa-university mr-3"></i> Facultad de Negocios y
                                Tecnologías</h5>
                            <h5 class="card-text"><i class="fas fa-calendar-day mr-3"></i> Lunes a Viernes </h5>
                            <h5 class="card-text"><i class="far fa-clock mr-3"></i> 10:00 a 14:00 hrs </h5>
                        </div>
                    </div>
                    <div class="card bg-light" style="padding:0;">
                        <div class="card-body">
                            <h4 class="card-title">Contacto</h4>
                            <h5 class="card-text"><i class="fas fa-user mr-3"> </i> Dr. Omar Juárez Rivera </h5>
                            <h5 class="card-text"><i class="far fa-envelope mr-3"> </i> <a
                                    href="mailto:ojuarez@uv.mx">ojuarez@uv.mx</a> </h5>
                            <h5 class="card-text"><i class="fas fa-phone-square-alt mr-3"> </i> (272) 728 08 15
                            </h5>
                        </div>
                    </div>
                    <div class="card bg-light" style="padding:0;">
                        <div class="card-body">
                            <h4 class="card-title">Ubicación</h4>
                            <h5 class="card-text"><i class="fas fa-university mr-3"></i> Campus Ixtaczoquitlán
                            </h5>
                            <h5 class="card-text"><i class="fas fa-map-marked-alt mr-3"></i> Carretera Estatal
                                Sumidero - Dos Rios, Km 1, Ixtaczoquitlán Veracruz, México. </h5>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <hr class="featurette-divider">
            <br>
            </div>

            <div id="map-container-google-1" class="z-depth-1-half map-container" frameborder="0" style=" border:0;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15097.588004549558!2d-97.03804447812368!3d18.913813817912317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x985793c74db2ba34!2sUniversidad%20Veracruzana!5e0!3m2!1ses!2smx!4v1606370225482!5m2!1ses!2smx"
                    width="100%" height="425" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
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
                            <i class="fas fa-user-check mr-3"></i> <a href="MenuEncuestas.php">Registrate</a> para poder
                            acceder a la encuesta
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
                            <i class="fas fa-map-marked-alt mr-3"></i> Carretera Estatal Sumidero - Dos Rios, Km 1,
                            Ixtaczoquitlán Veracruz, México.
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <!-- Grid row -->
            </div>
            <!-- Footer Links -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-secondary" style="background-color:#000000;">© 2020
                Copyright: MDBootstrap.com
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>