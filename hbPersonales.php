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
    include("includes/templates/navbar.php");;
    ?>

    <!--</menu>-->
    <main class="main">
        <div class="container px-4 px-lg-5 bg-white">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid shadow rounded mb-4 mb-lg-0" src="img/hbPersonales.jpeg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Test de Habilidades personales</h1>
                    <p>Al realizar las siguientes encuestas usted obtendrá un resultado para identificar áreas de oportunidad.</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">Seleccione una encuesta para comenzar</p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Desarrollo del Auto conocimiento</h2>
                            <p class="card-text">
                                <a href="EncuestaAutoconocimiento.php">- Evaluación del Desarrollo del autoconocimiento</a><br>
                                <a href="encuesta.php">- Evaluación de la inteligencia emocional</a><br>
                                <a href="EncuestaCognitivo.php">- Identificación del estilo cognoscitivo</a><br>
                                <a href="encuesta.php">- Locus de control</a><br>
                                <a href="EncuestaAmbiguedad.php">- Tolerancia a la Ambigüedad</a>
                        </div>
                        <div class="card-footer"><a>Seleccione una para empezar</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Evaluación del Manejo del Estrés</h2>
                            <p class="card-text">
                                <a href="EncuestaEstres.php">- Manejo del estrés</a><br>
                                <a href="EncuestaTiempo.php">- Administración del tiempo</a><br>
                                <a href="EncuestaPersonalidad.php">- Personalidad tipo A</a><br>
                                <a href="encuesta.php">- Reajuste Social</a><br>
                        </div>
                        <div class="card-footer"><a>Seleccione una para empezar</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Solución Creativa de Problemas</h2>
                            <p class="card-text">
                                <a href="EncuestaSolAnaCrea.php">- Solución de problemas, creatividad e innovación</a><br>
                                <a href="EncuestaCreatividad.php">- ¿Qué tan creativo eres?</a><br>
                                <a href="EncuestaActitudInnovadora.php">- Actitud Innovadora</a><br>
                                <a href="encuesta.php">- Estilo creativo</a><br>
                        </div>
                        <div class="card-footer"><a>Seleccione una para empezar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-secondary" style="background-color:#000000;">© 2020 Copyright: MDBootstrap.com
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>