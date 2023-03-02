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
    include("includes/templates/menu.php"); include("includes/templates/navbar.php");
    ;
    ?>
   
    <!--</menu>-->
    <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/hbPersonales.jpeg"  alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Test de Habilidades personales</h1>
                    <p>Al realizar las siguientes encuestas usted obtendrá un resultado para identificar áreas de oportunidad.</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Seleccione una encuesta para comenzar</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Desarrollo del Auto conocimiento</h2>
                            <p class="card-text">-Evaluación de la inteligencia emocional<br>
                                                -Determinación de valores y prioridades<br>
-Identificación del estilo cognoscitivo<br>
-Evaluación de la actitud hacia el cambio<br>
-Comprensión de la autoevaluación básica y esencial</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaSolAnaCrea.php">Empezar</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Evaluación del Manejo del Estrés</h2>
                            <p class="card-text">-Cómo enfrentar los factores estresantes<br>
-Administración del tiempo<br>
-Desarrollo de elasticidad</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaEstres.php">Comenzar</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Solución Creativa de Problemas</h2>
                            <p class="card-text">-Uso del enfoque racional<br>
-Uso del enfoque creativo<br>
-Fomento de la innovación en los demás</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="EncuestaSolAnaCrea.php">Empezar</a></div>
                    </div>
                </div>
            </div>
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