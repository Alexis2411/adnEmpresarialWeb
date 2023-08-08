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
                // Obtener las respuestas del formulario
                $respuestas = $_POST;

                // Crear un arreglo para almacenar la suma de las respuestas
                $suma = 0;

                // Recorrer todas las respuestas y sumar las "a" y "b" correspondientes
                foreach ($respuestas as $pregunta => $respuesta) {
                    if ($respuesta === '1') {
                        $suma++;
                    }
                }

                // Mostrar el resultado
                echo "Suma de respuestas correctas: " . $suma . "<br>";

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

                $id_usuario = $_SESSION['usuario'];
                $id_pregunta = 114;
                $id_seccion = 48;
                $valor = $suma;

                // Consulta SELECT para contar la cantidad de registros con los mismos valores
                $select_sql = "SELECT COUNT(*) as count FROM `respuesta-preguntas` WHERE id_usuario = $id_usuario AND id_pregunta = $id_pregunta AND id_seccion = $id_seccion";

                $result = $conn->query($select_sql);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $count = $row['count'];

                    if ($count > 0) {
                        // Si ya existe un registro, realizamos un UPDATE
                        $update_sql = "UPDATE `respuesta-preguntas` SET valor = $valor WHERE id_usuario = $id_usuario AND id_pregunta = $id_pregunta AND id_seccion = $id_seccion";

                        if ($conn->query($update_sql) !== TRUE) {
                            echo "Error al actualizar los resultados: " . $conn->error;
                        }
                    } else {
                        // Si no existe un registro, realizamos un INSERT
                        $insert_sql = "INSERT INTO `respuesta-preguntas` (id_usuario, id_pregunta, id_seccion, valor) VALUES ($id_usuario, $id_pregunta, $id_seccion, $valor)";

                        if ($conn->query($insert_sql) !== TRUE) {
                            echo "Error al insertar los resultados: " . $conn->error;
                        }
                    }
                } else {
                    echo "Error al realizar la consulta: " . $conn->error;
                }

                $sql = "INSERT INTO `resultado` (fecha, resultado, id_seccion, id_usuario) VALUES (NOW(),$suma, 48,  " . $_SESSION['usuario'] . ")";
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