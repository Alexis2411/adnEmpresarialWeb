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
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Definir variables para las sumas totales de cada inciso (a, b, c, d)
                    $suma_a_total = 0;
                    $suma_b_total = 0;
                    $suma_c_total = 0;
                    $suma_d_total = 0;

                    // Iterar sobre los datos del formulario y sumar los valores de cada inciso
                    foreach ($_POST as $key => $value) {
                        // Verificar si el nombre del campo es un reactivo (por ejemplo, reactivo1_a, reactivo2_b, etc.)
                        if (preg_match('/^reactivo(\d+)_(a|b|c|d)$/', $key, $matches)) {
                            $reactivo_num = $matches[1];
                            $inciso = $matches[2];

                            // Sumar el valor del inciso correspondiente
                            switch ($inciso) {
                                case 'a':
                                    $suma_a_total += (int) $value;
                                    break;
                                case 'b':
                                    $suma_b_total += (int) $value;
                                    break;
                                case 'c':
                                    $suma_c_total += (int) $value;
                                    break;
                                case 'd':
                                    $suma_d_total += (int) $value;
                                    break;
                            }
                        }
                    }

                    // Mostrar los resultados
                    echo "<h2>Suma total de cada inciso:</h2>";
                    echo "Suma a: $suma_a_total <br>";
                    echo "Suma b: $suma_b_total<br>";
                    echo "Suma c: $suma_c_total<br>";
                    echo "Suma d: $suma_d_total<br>";

                } else {
                    echo "<p>No se enviaron datos del cuestionario.</p>";
                }

                // Realizar la conexión a la base de datos (reemplaza los valores con tus credenciales)
                $servername = "localhost";
                $username = "adnempresarialco_admin";
                $password = "Rabodeperro2";
                $dbname = "adnempresarialco_demo2";

                // Crear una conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Error al conectar a la base de datos: " . $conn->connect_error);
                }

                $id_usuario = $_SESSION['usuario']; // Aquí debes establecer el ID del usuario según tu lógica de la aplicación
                $id_seccion = 49; // Aquí debes establecer el ID de la sección correspondiente
                
                // Verificar si ya existe un resultado para el usuario y la sección
                $sql_verificar = "SELECT COUNT(*) as count_resultados FROM `respuesta-preguntas` WHERE id_usuario = $id_usuario AND id_seccion = $id_seccion";

                $result_verificar = $conn->query($sql_verificar);

                if ($result_verificar && $result_verificar->num_rows > 0) {
                    $row_verificar = $result_verificar->fetch_assoc();
                    $count_resultados = $row_verificar['count_resultados'];

                    if ($count_resultados > 0) {
                        // Si ya existe un resultado, realizar una actualización en lugar de inserción
                        $sql_actualizar = "UPDATE `respuesta-preguntas` SET valor = CASE id_pregunta ";
                        $sql_actualizar .= "WHEN 117 THEN $suma_a_total ";
                        $sql_actualizar .= "WHEN 118 THEN $suma_b_total ";
                        $sql_actualizar .= "WHEN 119 THEN $suma_c_total ";
                        $sql_actualizar .= "WHEN 120 THEN $suma_d_total ";
                        $sql_actualizar .= "END ";
                        $sql_actualizar .= "WHERE id_usuario = $id_usuario AND id_seccion = $id_seccion";

                        if ($conn->query($sql_actualizar) === TRUE) {
                            echo "Resultados actualizados correctamente en la base de datos.";
                        } else {
                            echo "Error al actualizar los resultados: " . $conn->error;
                        }
                        $suma = ($suma_a_total + $suma_b_total + $suma_c_total + $suma_d_total);
                        $sql_insertar = "INSERT INTO `resultado` (fecha, resultado, id_seccion, id_usuario) VALUES (NOW(),$suma, 49,  " . $_SESSION['usuario'] . ")";
                        if ($conn->multi_query($sql_insertar) === TRUE) {
                            echo "Resultados guardados correctamente en la base de datos.";
                        } else {
                            echo "Error al guardar los resultados: " . $conn->error;
                        }
                    } else {
                        // Si no existe un resultado, realizar la inserción normalmente
                        $sql_insertar = "INSERT INTO `respuesta-preguntas` (id_usuario, id_pregunta, id_seccion, valor) VALUES ";

                        $sql_insertar .= "($id_usuario, 117, $id_seccion, $suma_a_total), "; // Suponiendo que el reactivo 'a' está asociado a la pregunta 1
                        $sql_insertar .= "($id_usuario, 118, $id_seccion, $suma_b_total), "; // Suponiendo que el reactivo 'b' está asociado a la pregunta 2
                        $sql_insertar .= "($id_usuario, 119, $id_seccion, $suma_c_total), "; // Suponiendo que el reactivo 'c' está asociado a la pregunta 3
                        $sql_insertar .= "($id_usuario, 120, $id_seccion, $suma_d_total)"; // Suponiendo que el reactivo 'd' está asociado a la pregunta 4
                
                        if ($conn->multi_query($sql_insertar) === TRUE) {
                            echo "Resultados guardados correctamente en la base de datos.";
                        } else {
                            echo "Error al guardar los resultados: " . $conn->error;
                        }
                        $suma = ($suma_a_total + $suma_b_total + $suma_c_total + $suma_d_total) / 7;
                        $sql_insertar = "INSERT INTO `resultados` (fecha, resultado, id_seccion, id_usuario) VALUES (NOW(),$suma, 49,  " . $_SESSION['usuario'] . ")";
                        if ($conn->multi_query($sql_insertar) === TRUE) {
                            echo "Resultados guardados correctamente en la base de datos.";
                        } else {
                            echo "Error al guardar los resultados: " . $conn->error;
                        }
                    }

                } else {
                    echo "Error al verificar la existencia de resultados: " . $conn->error;
                }



                // Cerrar la conexión
                $conn->close(); ?>
            </section>
        </div>
        <?php
        include_once 'usuario/templates/footer.php';
        ?>
    </div>
</body>

</html>