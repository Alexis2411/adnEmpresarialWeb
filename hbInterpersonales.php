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
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/interpersonales.jpg" alt="..." />
            </div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">Test de Habilidades Interpersonales</h1>
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
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Comunicación de Apoyo</h2>
                        <p class="card-text">-Coaching<br>
                            -Consultoría u operación<br>
                            -Escucha</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaSolAnaCrea.php">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Ganar Poder e Influencia</h2>
                        <p class="card-text">-Ganar Poder<br>
                            -Ejercer influencia<br>
                            -Incrementar Autoridad</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaEstres.php">Comenzar</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row gx-4 gx-lg-5">
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Motivación de los demás</h2>
                        <p class="card-text">-Diagnóstico de un bajo desempeño<br>
                            -Creación de un entorno motivador<br>
                            -Recompensa de logros</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaSolAnaCrea.php">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Manejo de Conflictos</h2>
                        <p class="card-text">-Identificación de las fuentes<br>
                            -Selección de estrategias<br>
                            -Resolución de confrontaciones</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaSolAnaCrea.php">Empezar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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