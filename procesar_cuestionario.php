<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre ='Inteligencia Emocional';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Cuestionario</title>
</head>
<body>
    <h1>Resultados del Cuestionario</h1>
    <?php
    // Definir las áreas de habilidad y sus valores correspondientes
    $areas_de_habilidad = array(
        "Conciencia emocional" => 0,
        "Control emocional (equilibrio)" => 0,
        "Diagnóstico emocional (empatía)" => 0,
        "Respuesta emocional" => 0
    );

    // Procesar las respuestas del formulario y calcular los puntajes
    for ($i = 1; $i <= 12; $i++) {
        $pregunta = "pregunta" . $i;
        if (isset($_POST[$pregunta])) {
            $puntaje = intval($_POST[$pregunta]);
            // Sumar el puntaje al área de habilidad correspondiente
            switch ($i) {
                case 1:
                case 2:
                case 4:
                case 6:
                case 9:
                case 10:
                case 11:
                case 12:
                    $areas_de_habilidad["Conciencia emocional"] += $puntaje;
                    break;
                case 3:
                case 7:
                    $areas_de_habilidad["Diagnóstico emocional (empatía)"] += $puntaje;
                    break;
                case 5:
                case 8:
                    $areas_de_habilidad["Respuesta emocional"] += $puntaje;
                    break;
                case 10:
                case 12:
                    $areas_de_habilidad["Control emocional (equilibrio)"] += $puntaje;
                    break;
                default:
                    break;
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
    $id=111;

    // Insertar los resultados en la tabla
    foreach ($areas_de_habilidad as $area => $puntaje) {
        $sql = "INSERT INTO `respuesta-preguntas` (id_usuario, id_pregunta, id_seccion, valor) VALUES (" . $_SESSION['usuario'] . ", $id, 47, $puntaje)";
        $id=$id+1;
        if ($conn->query($sql) !== TRUE) {
            echo "Error al insertar los resultados: " . $conn->error;
        }
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
