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
                    <h1 class="text-center"><strong>Reajuste Social</strong></h1>
                    <p class="text-justify">
                    <h3><strong>Descripción:</strong></h3>
                    <ol>
                        <li>
                            Marque cualquiera de las siguientes situaciones que haya experimentado en el último año.
                            Utilice las cifras de la columna izquierda y súmelas para obtener su puntuación.


                        </li>
                        <li>
                            Sea honesto.
                        </li>

                        <li>
                            No existen respuestas correctas o incorrectas
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
            $resultado = myScore(42);

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
                            $resultado = myScore(42);

                            // Mostrar los resultados en una tabla
                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                echo "<tr><td>" . $fila["fecha"] . "</td><td>" . $fila["resultado"] . "</td></tr>";
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
                        $seccion = obtSeccion(42, 42);
                        if ($seccion) {
                            foreach ($seccion as $row) {
                                ?>
                                <div class="card" style="margin: 2px">
                                    <div class="card-body">
                                        <h5 class="text-center font-weight-bold" style="font-size: 1rem; width: fit-content">

                                        </h5>
                                        <?php
                                        if (mysqli_num_rows($resultado) > 0) {
                                            $complete = scorePregunta(42);
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
                                                                    $result1 = $complete->fetch_assoc();
                                                                    if ($result1["total"] < 1) {
                                                                        $result1["total"] = 0;
                                                                    }
                                                                    ?>

                                                                    <span class="badge
                                                                        <?php
                                                                        if
                                                                        ($result1["total"] <= 122) {
                                                                            echo $noPassed;
                                                                        } elseif ($result1["total"] > 123 && $result1["total"] <= 346) {
                                                                            echo $mediumPassed;
                                                                        } elseif ($result1["total"] >= 347) {
                                                                            echo $passed;
                                                                        }
                                                                        ?> float-right">

                                                                        <?php echo $result1["total"]; ?>
                                                                        / 2577
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
                                                                            $valor = $result1["total"];
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                    Score
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    if ($valor <= 122) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    if ($valor > 123 && $valor < 346) {
                                                                                        echo '&#9679;';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    if ($valor >= 347) {
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
                                                        $total = $result1["total"];
                                                        ?>
                                                        <div class="card card-default
                                                                                                                                      <?php
                                                                                                                                      if ($total <= 122) {
                                                                                                                                          echo $noPassed;
                                                                                                                                      } else if ($total > 123 && $total <= 346) {
                                                                                                                                          echo $mediumPassed;
                                                                                                                                      } else if ($total >= 347) {
                                                                                                                                          echo $passed;
                                                                                                                                      }

                                                                                                                                      ?>

                        ">
                                                            <div class="card-header text-light text-center">
                                                                <h1>
                                                                    <strong><i class="fas fa-award"></i> PUNTUACIÓN TOTAL:
                                                                        <?php
                                                                        echo $total; ?> / 2577
                                                                    </strong>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="card-header text-light text-center">
                                                            <a class="btn btn-info"
                                                                style="font-size: 6rem; width: fit-content; margin: 0;"
                                                                href="PreguntasReajuste.php">Reintentar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <a class="btn btn-info mx-auto"
                                                style="font-size: 3rem; width: fit-content; margin-top: 2rem;"
                                                href="PreguntasReajuste.php">Empezar</a>
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

                                        <a class="btn btn-info mx-auto"
                                            href="InvitedSeccion.php?ques=<?php echo $row["nombre"]; ?>">Empezar</a>

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