<?php
// Incluir el archivo de conexión a la base de datos
include 'includes/function/conexion.php';

// Query para obtener los datos necesarios
$query = "SELECT estado, resultado FROM usuario u INNER JOIN resultado r ON r.id_usuario = u.id_usuario INNER JOIN empresa e ON e.id_usuario = u.id_usuario WHERE id_seccion = 5";
$resultado = mysqli_query($conexion, $query);

// Crear un array para almacenar los datos
$datos = [];

// Obtener los valores de resultado y estado y almacenarlos en el array $datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}

// Devolver los datos en formato JSON
echo json_encode($datos);
?>
