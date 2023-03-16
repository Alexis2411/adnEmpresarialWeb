<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    include("includes/templates/head.php");  
    tittle("Encuesta");
    ?>
</head>

<body style="background: lightgray; font-size: 20px; line-height: 25px; margin:0; font-family:'Raleway', sans-serif;">

    <!--Barra de navegación-->
    <?php
    include("includes/templates/menu.php"); include("includes/templates/navbar.php");
    ?>
    <!--Barra de navegación-->

    <!-- Contenido destabado -->

    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="jumbotron bg-ligth">
                <div class="container barra">
                    <h1 class="text-center"><strong>Ganar poder e influencia</strong></h1>
                    <p class="text-justify">
                    <h3><strong>Descripción:</strong></h3>
                    <ol>
                        <li>
Este instrumento está diseñado para ayudarlo a descubrir su nivel de competencia para ganar poder e influencia, con la finalidad de que ajuste el aprendizaje a sus necesidades </li>
                        <li>
                        Las respuestas deben reflejar sus actitudes y comportamiento como son ahora, no como usted quisiera que fueran.
                        </li>
                        <li>
                        Sea honesto.
                        </li>
                        <li>
                        Este instrumento está diseñado para ayudarle a descubrir su nivel de competencia en la comunicación de apoyo, con la finalidad de que pueda adaptar su aprendizaje a sus necesidades específicas.
                        </li>
                        <li>
                        Cuando haya respondido el cuestionario, utilice la clave de resultados al final del capítulo, para identificar aquellas áreas de habilidad que se estudian en este capítulo y que usted necesita aprender a dominar
                        </li>
                    </ol>

                    <h3><strong>Instrucciones:</strong></h3>
                    <ul>
                        <li>
                            Todas las preguntas tienen seis opciones de respuesta, elija la que mejor describa lo que piensa sobre los elementos del proceso administrativo, tomando en cuenta lo siguiente:
                        </li>
                        <br>
                        <ol>
                            <li> Totalmente en desacuerdo </li>
                            <li> En desacuerdo </li>
                            <li> Ligeramente en desacuerdo </li>
                            <li> Ligeramente de acuerdo </li>
                            <li> De acuerdo </li>
                            <li> Totalmente de acuerdo </li>
                        </ol>
                        <br>
                        <li>
                            No existen respuestas correctas o incorrectas y <strong>solamente puede elegir una opción.</strong>
                        </li>
                    </ul>
                    </p>
                    <p class="nota text-center" style="font-style: oblique;">
                        Sus respuestas serán anónimas y absolutamente confidenciales.
                        Los cuestionarios serán procesados automáticamente. <br>
                        De antemano muchas gracias por su colaboración.
                    </p>
                </div>
            </div>
            <!-- Contenido destabado -->
        </div>

        <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 d-flex " style="max-width: 100% ; width: 100%">
            <!-- Contenido 4 columnas -->
                    <?php
                    include "includes/function/funciones.php";
                    if (isset($_SESSION['usuario'])) {
                        $seccion = obtSeccion(14, 14);
                        if ($seccion) {
                            foreach ($seccion as $row) {
                                ?>
                                <div class="card" style="margin: 2px">
                                    <div class="card-body">
                                        <h5 class="text-center font-weight-bold" style="font-size: 1rem; width: fit-content">
                                            <?php echo $row["nombre"]; ?>
                                        </h5>
                                        <?php
                                        if ($row["completo"] == 1) {
                                            $complete = scoreSeccion($row["id_seccion"]);
                                            if ($complete) {
                                                foreach($complete as $comp){
                                                    if($comp["total"] < 1 ){
                                                        $puntaje = 0;
                                                    }else{
                                                        $puntaje = $comp["total"];
                                                    }
                                                    $puntajeTotal = $comp["valor"];
                                                }
                                            }else{
                                                $puntaje = "error";
                                                $puntajeTotal = "error";
                                            }
                                            ?>
                                            <div class="card-body">
                        <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                            <div class="col-sm-12>
                                <div class="card card-default" style="background:#b3e5fc;">
                                    <div class="card-header">
                                        <a class="card-title text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="True" aria-controls="collapseOne" data-parent="#accordion" href="#collapseOne">
                                            <strong><i class="fas fa-plus-circle text-dark"></i> Diagnostico </strong>
                                        </a>
                                        <h3>
                                            <?php
                                            $complete = scoreSeccion(14);
                                            $result1 = $complete->fetch_assoc();
                                            if ($result1["total"] < 1) {
                                                $result1["total"] = 0;
                                            }
                                            ?>

                                            <span class="badge
                                        <?php
                                        if ($result1["total"] / 2 <= 125) {
                                            echo $noPassed;
                                        } elseif ($result1["total"] / 2 > 125  && $result1["total"] / 2 < 145) {
                                            echo $mediumPassed;
                                        } elseif ($result1["total"] / 2 > 145) {
                                            echo $passed;
                                        }
                                        ?>
                                        float-right">

                                                <?php echo $result1["total"] / 2; ?>
                                                / 168
                                            </span>


                                        </h3>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table table-striped table-light">
                                                <thead class="table-dark text-center">
                                                    <tr>
                                                        <th scope="col">BLOQUE</th>
                                                        <th scope="col" class="bg-danger">Cuartil Inferior</th>
                                                        <th scope="col" class="bg-warning">Media</th>
                                                        <th scope="col" class="bg-success">Cuartil Superior</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 33);
                                                    $p1 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            Pericia 
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 34);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Atractivo interpersonal</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 35);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Esfuerzo</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 36);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Legitimidad</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 37);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Centralidad</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 38);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Visibilidad</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 38);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Flexibilidad</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 39);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Relevancia</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 9) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 9 && $valor / 2 < 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 10) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 40);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Uso de influencia</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 22) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 22 && $valor / 2 < 26) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 26) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr><?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 41);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Resistencia a la influencia</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 13) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 13 && $valor / 2 < 16) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 16) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $bloque = bloqueScore($_SESSION['usuario'], 42);
                                                    $p2 = $bloque->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td>Incremento de la autoridad</td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = ($p1["valor"] < 1 ? '0' :  $p1["valor"]);
                                                            if ($valor / 2 <= 18) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 > 18 && $valor / 2 < 21) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            $valor = $p1["valor"] < 1 ? '0' :  $p1["valor"];
                                                            if ($valor / 2 >= 21) {
                                                                echo '&#9679;';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>

                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <?php
                                $total = $result1["total"] / 2;
                                ?>
                                <div class="card card-default
                      <?php
                        if ($total <= 125) {
                            echo $noPassed;
                        } else if ($total > 125 && $total <= 145) {
                            echo $mediumPassed;
                        } else if ($total > 145) {
                            echo $passed;
                        }

                        ?>

                        ">
                                    <div class="card-header text-light text-center">
                                        <h1>
                                            <strong><i class="fas fa-award"></i> PUNTUACIÓN TOTAL:
                                                <?php
                                                echo $total; ?> / 168
                                            </strong>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                            <?php
                                        }else {
                                            ?>
                                            <a class="btn btn-info" style="font-size: 9rem; width: fit-content; margin: 0;" href="PreguntasSeccionseis.php?ques=<?php echo $row["nombre"]; ?>">Empezar</a>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "error";
                        }
                    }elseif (isset($_SESSION['invited'])) {
                        $seccion = obtSeccionInvited();
                        if ($seccion) {
                            foreach ($seccion as $row) {
                                ?>
                                <div class="col-md-3">
                                    <img class="card-img-top image-responsive" src="<?php echo $row["imagen"] ?>" alt="Card image cap"
                                         max-width="100%" width="80%">
                                    <div class="card-body">
                                        <h5 class="card-title text-center font-weight-bold" > <?php echo romano($row["id_seccion"]); ?>.
                                            <?php echo $row["nombre"]; ?></h5>

                                        <a class="btn btn-info" href="InvitedSeccion.php?ques=<?php echo $row["nombre"]; ?>">Empezar</a>

                                    </div>
                                </div>
                                <?php

                            }
                        } else {
                            echo "error";
                        }
                    }
                    ?>

            <!-- Contenido 4 columnas -->
                    </div>
                </div>
        </div>

    </div>

    <!-- Pie de pagina -->
    <footer class="page-footer font-small text-secondary pt-4"
        style="background-color:#404040; font-family:'Raleway', sans-serif;">
        <!-- Copyright -->
        <p class="text-center"><em>Sus respuestas serán anónimas y absolutamente confidenciales. Los cuestionarios serán
                procesados automáticamente.</em> </p>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
        <!-- <script src="js/app.js"></script> -->

    </footer>
    <!-- Pie de pagina -->
</body>
</html>