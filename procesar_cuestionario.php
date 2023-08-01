<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre = 'Inteligencia Emocional';
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


            <!--S Main content -->
            <!-- Main content -->
            <section class="content">
                <h1>Resultados del Cuestionario</h1>
                <?php
                // Definir las áreas de habilidad y sus valores correspondientes
                $areas_de_habilidad = array(
                    "Conciencia emocional" => 0,
                    "Control emocional" => 0,
                    "Diagnóstico emocional" => 0,
                    "Respuesta emocional" => 0
                );

                // Procesar las respuestas del formulario y calcular los puntajes
                for ($i = 1; $i <= 12; $i++) {
                    $pregunta = "pregunta" . $i;
                    if (isset($_POST[$pregunta])) {
                        $puntaje = intval($_POST[$pregunta]);
                        if ($puntaje==10 || $puntaje==5 ){
                            $areas_de_habilidad["Conciencia emocional"] += $puntaje;
                        }else if ($puntaje/3==10 || $puntaje/3==5 ){
                            $areas_de_habilidad["Control emocional"] += $puntaje/3;
                        }else if ($puntaje/4==10 || $puntaje/4==5 ){
                            $areas_de_habilidad["Diagnóstico emocional"] += $puntaje/4;
                        }else if ($puntaje/5==10 || $puntaje/5==5 ){
                            $areas_de_habilidad["Respuesta emocional"] += $puntaje/5;
                        }
                    }
                }

                // Mostrar los resultados del cuestionario
                echo "<h2>Resultados:</h2>";
                echo "<ul>";
                foreach ($areas_de_habilidad as $area => $puntaje) {
                    echo "<li><strong>$area:</strong> $puntaje</li>";
                }
                echo "</ul>";

                // Realizar la conexión a la base de datos (reemplaza los valores con tus credenciales)
                $servername = "localhost";
                $username = "adnempre_admin";
                $password = "Uv2020@#$";
                $dbname = "adnempresarialco_demo2";

                // Crear una conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Error al conectar a la base de datos: " . $conn->connect_error);
                }
                $id = 111;
                $suma = 0;
                // Insertar los resultados en la tabla
                foreach ($areas_de_habilidad as $area => $puntaje) {
                    $sql_check = "SELECT COUNT(*) AS count FROM `respuesta-preguntas` 
                                  WHERE id_usuario = " . $_SESSION['usuario'] . " 
                                  AND id_pregunta = $id 
                                  AND id_seccion = 47";
                    
                    $result = $conn->query($sql_check);
                    $row = $result->fetch_assoc();
                    $count = $row['count'];
                    
                    if ($count > 0) {
                        $sql_update = "UPDATE `respuesta-preguntas` 
                                       SET valor = $puntaje 
                                       WHERE id_usuario = " . $_SESSION['usuario'] . " 
                                       AND id_pregunta = $id 
                                       AND id_seccion = 47";
                        if ($conn->query($sql_update) !== TRUE) {
                            echo "Error al actualizar los resultados: " . $conn->error;
                        }
                    } else {
                        $sql_insert = "INSERT INTO `respuesta-preguntas` (id_usuario, id_pregunta, id_seccion, valor) 
                                       VALUES (" . $_SESSION['usuario'] . ", $id, 47, $puntaje)";
                        if ($conn->query($sql_insert) !== TRUE) {
                            echo "Error al insertar los resultados: " . $conn->error;
                        }
                    }
                
                    $id = $id + 1;
                    $suma = $suma + $puntaje;
                }
                
                
                
                $sql = "INSERT INTO `resultado` (fecha, resultado, id_seccion, id_usuario) VALUES (NOW(),$suma, 47,  " . $_SESSION['usuario'] . ")";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error al insertar los resultados: " . $conn->error;
                }


                // Cerrar la conexión
                $conn->close();
                ?>
            </section>
        </div>
        <?php
        include_once 'usuario/templates/footer.php';
        ?>
    </div>
</body>

</html>