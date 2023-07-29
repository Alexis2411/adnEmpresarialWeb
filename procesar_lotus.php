<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre = 'Inteligencia Emocional';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Resultados del Cuestionario</title>
</head>

<body>
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
    echo "Suma de respuestas 'a': " . $suma . "<br>";
    ?>

</body>

</html>