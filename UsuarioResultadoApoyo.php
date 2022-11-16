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
                    <h1> Diagnóstico para la comunicación de apoyo</h1>
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
                    
                    <div class="card-body">
                        <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                            <div class="col-md-12">
                                <div class="card card-default" style="background:#b3e5fc;">
                                    <div class="card-header">
                                        <a class="card-title text-dark">
                                            <strong><i class="fas fa-plus-circle text-dark"></i> Sección I. Conocimiento de coaching y de consultoría</strong>
                                        </a>
                                        <h3>
                                            <?php
                                            $complete = scoreSeccion(5);
                                            $result1 = $complete->fetch_assoc();
                                            if ($result1["total"] < 1) {
                                                $result1["total"] = 0;
                                            }
                                            ?>

                                            <span class="badge
                                        <?php
                                        if ($result1["total"] / 2 <= 15) {
                                            echo $mpassed;
                                        }
                                        ?>
                                        float-right"
                                                <?php echo $result1["total"] / 2; ?>
                                                / 15
                                            </span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                            <div class="col-md-12">
                                <div class="card card-default" style="background:#b3e5fc;">
                                    <div class="card-header">
                                        <a class="card-title text-dark">
                                            <strong><i class="fas fa-plus-circle text-dark"></i> Sección I. Conocimiento de coaching y de consultoría</strong>
                                        </a>
                                        <h3>
                                            <?php
                                            $complete = scoreSeccion(6);
                                            $result2 = $complete->fetch_assoc();
                                            if ($result1["total"] < 1) {
                                                $result1["total"] = 0;
                                            }
                                            ?>

                                            <span class="badge
                                        <?php
                                        if ($result2["total"] / 2 <= 30) {
                                            echo $mpassed;
                                        }
                                        ?>
                                        float-right"
                                                <?php echo $result2["total"] / 2; ?>
                                                / 30
                                            </span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                            <div class="col-md-12">
                                <div class="card card-default" style="background:#b3e5fc;">
                                    <div class="card-header">
                                        <a class="card-title text-dark">
                                            <strong><i class="fas fa-plus-circle text-dark"></i> Sección I. Conocimiento de coaching y de consultoría</strong>
                                        </a>
                                        <h3>
                                            <?php
                                            $complete = scoreSeccion(7);
                                            $result3 = $complete->fetch_assoc();
                                            if ($result3["total"] < 1) {
                                                $result3["total"] = 0;
                                            }
                                            ?>

                                            <span class="badge
                                        <?php
                                        if ($result3["total"] / 2 <= 30) {
                                            echo $mpassed;
                                        }
                                        ?>
                                        float-right"
                                                <?php echo $result3["total"] / 2; ?>
                                                / 55
                                            </span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php
                    $total = ($result1["total"] + $result2["total"] + $result3["total"])/2;
                    ?>
                    <div class="card card-default
                      <?php
                        if ($total <= 83) {
                            echo $noPassed;
                        } else if ($total >= 84 && $total <= 91) {
                            echo $mediumPassed;
                        }else if ($total >= 92 && $total <= 98) {
                            echo $mediumPassed;
                        } else if ($total >= 99) {
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