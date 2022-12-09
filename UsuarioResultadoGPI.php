<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once 'usuario/templates/header.php';
    ?>
    <title>Perfil | Resultados</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
        include_once 'usuario/templates/navbar.php';
        include_once 'usuario/templates/sidebar.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid text-center">
                    <h1> Ganar Poder e Influencia</h1>
                </div><!-- /.container-fluid -->
            </section>

            <!--S Main content -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <?php
                    include "includes/function/funciones.php";
                    $passed = "badge-success";
                    $mediumPassed = "badge-warning";
                    $noPassed = "badge-danger";
                    ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                            <div class="col-md-12">
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
                                                            Pericia (Caracteristicas personales)
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

                            <div class="col-md-12">
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
                    </div>
                    <!-- /.row -->
                    <!-- END ALERTS AND CALLOUTS -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php
        include_once 'usuario/templates/footer.php';
        ?>
    </div>
</body>

</html>