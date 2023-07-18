<?php
session_start();
$_SESSION['archivo'] = basename(__FILE__);
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
    include("includes/templates/menu.php");
    include("includes/templates/navbar.php");
    ?>
    <!--Barra de navegación-->

    <!-- Contenido destabado -->

    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="jumbotron bg-ligth">
                <div class="container barra">
                    <h1 class="text-center"><strong>Actitud Innovadora</strong></h1>
                    <p class="text-justify">
                    <h3><strong>Descripción:</strong></h3>
                    <ol>
                        <li>
                            Las respuestas deben reflejar sus actitudes y comportamiento como son ahora, no como usted
                            quisiera que fueran.
                        </li>
                        <li>
                            Sea honesto.
                        </li>
                        <li>
                        Indique el grado en el que cada uno de los siguientes enunciados es verdadero, ya sea en relación con su comportamiento real o con sus intenciones en el trabajo; es decir, describa su forma de ser o la forma que pretende ser en el trabajo.				
									
					 						
						
                        </li>
                        
                    </ol>

                    <h3><strong>Instrucciones:</strong></h3>
                    <ul>
                        <li>
                            Todas las preguntas tienen cinco opciones de respuesta, elija la que mejor describa lo que
                            piensa sobre los elementos del proceso administrativo, tomando en cuenta lo siguiente:
                        </li>
                        <br>
                        <ol>
                        <li>Nunca</li>
                        <li>Rara vez</li>
                        <li>A veces</li>
<li>Con frecuencia</li>
<li>Siempre</li>
                        </ol>
                        <br>
                        <li>
                            No existen respuestas correctas o incorrectas y <strong>solamente puede elegir una
                                opción.</strong>
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

            <?php
            include "includes/function/funciones.php";
            $passed = "badge-success";
                        $mediumPassed = "badge-warning";
                        $noPassed = "badge-danger";
            $resultado = myScore(43);

            if (mysqli_num_rows($resultado) > 0) {
                ?>
                
                    <div class="container mt-5">
                        <h2>Tabla de Resultados</h2>
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $resultado = myScore(43);

                                // Mostrar los resultados en una tabla
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    echo "<tr><td>" . $fila["fecha"] . "</td><td>" . $fila["resultado"]/2 . "</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                
                <?php
            }
            ?>
            <div class="row">
                <div class="col-md-12 d-flex " style="max-width: 100% ; width: 100%">
                    <!-- Contenido 4 columnas -->
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        $seccion = obtSeccion(43, 43);
                        if ($seccion) {
                            foreach ($seccion as $row) {
                                ?>
                                <div class="card" style="margin: 2px">
                                    <div class="card-body">
                                        <h5 class="text-center font-weight-bold" style="font-size: 1rem; width: fit-content">

                                        </h5>
                                        <?php
                                        if ($row["completo"] == 1) {
                                            $complete = scoreSeccion($row["id_seccion"]);
                                            if ($complete) {
                                                foreach ($complete as $comp) {
                                                    if ($comp["total"] < 1) {
                                                        $puntaje = 0;
                                                    } else {
                                                        $puntaje = $comp["total"];
                                                    }
                                                    $puntajeTotal = $comp["valor"];
                                                }
                                            } else {
                                                $puntaje = "error";
                                                $puntajeTotal = "error";
                                            }
                                            ?>
                                            <div class="card-body">
                                                <div id="accordion">
                                                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                                    <div class="col-md-12">
                                                        <div class="card card-default" style="background:#b3e5fc;">
                                                            <div class="card-header">
                                                                <a class="card-title text-dark" data-toggle="collapse"
                                                                    data-target="#collapseOne" aria-expanded="True"
                                                                    aria-controls="collapseOne" data-parent="#accordion"
                                                                    href="#collapseOne">
                                                                    <strong><i class="fas fa-plus-circle text-dark"></i> Diagnostico
                                                                    </strong>
                                                                </a>
                                                                <h3>
                                                                    <?php
                                                                    $complete = scoreSeccion(43);
                                                                    $result1 = $complete->fetch_assoc();
                                                                    if ($result1["total"] < 1) {
                                                                        $result1["total"] = 0;
                                                                    }
                                                                    ?>

                                                                    <span class="badge
                                                                                                                                                        <?php
                                                                                                                                                        if                    
                                                                                                                                                        ($result1["total"] / 2 <= 83){ 
                                                                                                                                                            echo $noPassed;
                                                                                                                                                        } elseif ($result1["total"] / 2 > 83 && $result1["total"] / 2 <= 98) {
                                                                                                                                                            echo $mediumPassed;
                                                                                                                                                        } elseif ($result1["total"] / 2 > 99) {
                                                                                                                                                            echo $passed;
                                                                                                                                                        }
                                                                                                                                                        ?>
                                        float-right">

                                                                        <?php echo $result1["total"] / 2; ?>
                                                                        / 100
                                                                    </span>


                                                                </h3>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in"
                                                                aria-labelledby="headingOne" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table class="table table-striped table-light">
                                                                        <thead class="table-dark text-center">
                                                                            <tr>
                                                                                <th scope="col">BLOQUE</th>
                                                                                <th scope="col" class="bg-danger">Cuartil Inferior
                                                                                </th>
                                                                                <th scope="col" class="bg-warning">Media</th>
                                                                                <th scope="col" class="bg-success">Cuartil Superior
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $bloque = bloqueScore($_SESSION['usuario'], 24);
                                                                            $p1 = $bloque->fetch_assoc();
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                    Conocimiento de coaching y de consultoría
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = ($p1["valor"] < 1 ? '0' : $p1["valor"]);
                                                                                    if ($valor / 2 <= 12) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p1["valor"] < 1 ? '0' : $p1["valor"];
                                                                                    if ($valor / 2 > 12 && $valor / 2 < 14) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p1["valor"] < 1 ? '0' : $p1["valor"];
                                                                                    if ($valor / 2 >= 15) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                            <?php
                                                                            $bloque = bloqueScore($_SESSION['usuario'], 25);
                                                                            $p2 = $bloque->fetch_assoc();
                                                                            ?>
                                                                            <tr>
                                                                                <td>Ofrecimiento de retroalimentacion negativa
                                                                                    eficaz
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p2["valor"] < 1 ? '0' : $p2["valor"];
                                                                                    if ($valor / 2 <= 24) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p2["valor"] < 1 ? '0' : $p2["valor"];
                                                                                    if ($valor / 2 > 24 && $valor / 2 < 29) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p2["valor"] < 1 ? '0' : $p2["valor"];
                                                                                    if ($valor / 2 > 29) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>

                                                                            <?php
                                                                            $bloque = bloqueScore($_SESSION['usuario'], 26);
                                                                            $p3 = $bloque->fetch_assoc();
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                    Ofrecimiento de retroalimentacion negativa
                                                                                    eficaz
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p3["valor"] < 1 ? '0' : $p3["valor"];
                                                                                    if ($valor / 2 <= 44) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p3["valor"] < 1 ? '0' : $p3["valor"];
                                                                                    if ($valor / 2 > 44 && $valor / 2 <= 54) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $valor = $p3["valor"] < 1 ? '0' : $p3["valor"];
                                                                                    if ($valor / 2 > 54) {
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

                                                    <div class="col-md-12">
                                                        <?php
                                                        $total = $result1["total"] / 2;
                                                        ?>
                                                        <div class="card card-default
                                                                                                                                      <?php
                                                                                                                                      if ($total <= 83) {
                                                                                                                                          echo $noPassed;
                                                                                                                                      } else if ($total > 83 && $total <= 98) {
                                                                                                                                          echo $mediumPassed;
                                                                                                                                      } else if ($total > 98) {
                                                                                                                                          echo $passed;
                                                                                                                                      }

                                                                                                                                      ?>

                        ">
                                                            <div class="card-header text-light text-center">
                                                                <h1>
                                                                    <strong><i class="fas fa-award"></i> PUNTUACIÓN TOTAL:
                                                                        <?php
                                                                        echo $total; ?> / 100
                                                                    </strong>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="card-header text-light text-center">
                                                                <a class="btn btn-info"
                                                                    style="font-size: 6rem; width: fit-content; margin: 0;"
                                                                    href="PreguntasSeccion.php?ques=<?php echo $row["nombre"]; ?>">Reintentar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <a class="btn btn-info mx-auto" style="font-size: 3rem; width: fit-content; margin-top: 2rem;" href="PreguntasSeccion.php?ques=<?php echo $row["nombre"]; ?>">Empezar</a>
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
                    } elseif (isset($_SESSION['invited'])) {
                        $seccion = obtSeccionInvited();
                        if ($seccion) {
                            foreach ($seccion as $row) {
                                ?>
                                <div class="col-md-3">
                                    <img class="card-img-top image-responsive" src="<?php echo $row["imagen"] ?>"
                                        alt="Card image cap" max-width="100%" width="80%">
                                    <div class="card-body">
                                        <h5 class="card-title text-center font-weight-bold">
                                            <?php echo romano($row["id_seccion"]); ?>.
                                            <?php echo $row["nombre"]; ?>
                                        </h5> 
                                            <a class="btn btn-info"
                                            href="InvitedSeccion.php?ques=<?php echo $row["nombre"]; ?>">Empezar</a>

                                        <a class="btn btn-info mx-auto" href="InvitedSeccion.php?ques=<?php echo $row["nombre"]; ?>">Empezar</a>

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
        style="background-color:#434343; font-family:'Raleway', sans-serif;">
        <!-- Copyright -->
        <p class="text-center"><em>Sus respuestas serán anónimas y absolutamente confidenciales. Los cuestionarios
                serán
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