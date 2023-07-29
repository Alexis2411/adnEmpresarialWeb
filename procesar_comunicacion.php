<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenemos los datos enviados desde el formulario
    $opcion1 = $_POST["selector1"] ?? "";
    $opcion2 = $_POST["selector2"] ?? "";
    $opcion3 = $_POST["selector3"] ?? "";

    // Aquí puedes realizar las acciones necesarias con los datos recibidos,
    // como guardarlos en una base de datos, enviar un correo electrónico, etc.
    // En este ejemplo, simplemente los imprimimos para mostrarlos en pantalla.

    echo "Respuesta 1: Opción seleccionada: " . $opcion1 . "<br>";
    echo "Respuesta 2: Opción seleccionada: " . $opcion2 . "<br>";
    echo "Respuesta 3: Opción seleccionada: " . $opcion3 . "<br>";
}
?>
