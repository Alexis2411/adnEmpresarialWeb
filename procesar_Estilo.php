<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Cuestionario</title>
</head>
<body>
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
                        $suma_a_total += (int)$value;
                        break;
                    case 'b':
                        $suma_b_total += (int)$value;
                        break;
                    case 'c':
                        $suma_c_total += (int)$value;
                        break;
                    case 'd':
                        $suma_d_total += (int)$value;
                        break;
                }
            }
        }

        // Mostrar los resultados
        echo "<h2>Suma total de cada inciso:</h2>";
        echo "Suma a: $suma_a_total<br>";
        echo "Suma b: $suma_b_total<br>";
        echo "Suma c: $suma_c_total<br>";
        echo "Suma d: $suma_d_total<br>";

    } else {
        echo "<p>No se enviaron datos del cuestionario.</p>";
    }
    ?>
</body>
</html>
