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
    include("includes/templates/navbar.php");
    ;
    ?>

    <!--</menu>-->
    <main class="main">
        <div class="container px-4 px-lg-5 bg-white">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid shadow rounded mb-4 mb-lg-0" src="img/grupales.jpg" alt="..." />
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Test de Habilidades Grupales</h1>
                    <p>Al realizar las siguientes encuestas usted obtendrá un resultado para identificar áreas de
                        oportunidad.</p>
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
                            <h2 class="card-title">Facultamiento y Delegación</h2>
                            <p class="card-text">
                                <a href="EncuestaFaDele.php">- Facultamiento y Delegación Eficaces</a><br>
                                <a href="EncuestaFaPe.php">- Evaluación del Facultamiento Personal</a><br>
                        </div>
                        <div class="card-footer"><a>Seleccione una para empezar</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Formación de Equipos</h2>
                            <p class="card-text">
                                <a href="EncuestaCompDesaE.php">- Comportamiento para el Desarrollo de Equipos</a><br>
                                <a href="EncuestaNeFoE.php">- Diagnostico de la Necesidad de Formacion de Equipos</a><br>
                        </div>
                        <div class="card-footer"><a>Seleccione una para empezar</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                        <h2 class="card-title">Liderar el Cambio Positivo</h2>
                        <p class="card-text">
                                <a href="EncuestaDirCamPos.php">- Liderar el Cambio Positivo</a><br>
                                <a href="EncuestaMaquiavelismo.php">- Escala de Maquiavelismo</a><br>
                        </div>
                        <div class="card-footer"><a>Seleccione una para empezar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-secondary" style="background-color:#000000;">© 2020 Copyright:
        MDBootstrap.com
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>
