<?php
    $dato = $_POST['dato'];
    $num_encuesta_0 = $_POST['num_encuesta_0'];
    $num_encuesta = $_POST['num_encuesta'];
    require_once "conexion.php";
    $conexion= conexion();
    $sql= "SELECT r1.resultado AS r1, r2.resultado AS r2
    FROM resultado r1
    INNER JOIN resultado r2 ON r1.id_usuario = r2.id_usuario
    WHERE r1.id_seccion='$num_encuesta_0' AND r2.id_seccion='$num_encuesta'
      AND r1.fecha = (
        SELECT MAX(fecha) 
        FROM resultado 
        WHERE id_seccion='$num_encuesta_0'
          AND id_usuario = r1.id_usuario
      )
      AND r2.fecha = (
        SELECT MAX(fecha) 
        FROM resultado 
        WHERE id_seccion='$num_encuesta'
          AND id_usuario = r2.id_usuario
      );
    ";
    $result=mysqli_query($conexion, $sql);
    $valoresy=array();
    $valoresx=array();
    while ($ver=mysqli_fetch_row($result)){
        $valoresx[]=$ver[0]/2;
        $valoresy[]=$ver[1]/2;
    }
    $datosX=json_encode($valoresx);
    $datosY=json_encode($valoresy);

    function calcularRegresionLineal($x, $y) {
        $n = count($x);
        $sumX = 0;
        $sumY = 0;
        $sumXY = 0;
        $sumXX = 0;

        for ($i = 0; $i < $n; $i++) {
            $sumX += $x[$i];
            $sumY += $y[$i];
            $sumXY += $x[$i] * $y[$i];
            $sumXX += $x[$i] * $x[$i];
        }

        $m = ($n * $sumXY - $sumX * $sumY) / ($n * $sumXX - $sumX * $sumX);
        $b = ($sumY - $m * $sumX) / $n;

        return array('m' => $m, 'b' => $b);
    }

    function calcularValoresRegresion($x, $m, $b) {
        $valoresY = array();

        for ($i = 0; $i < count($x); $i++) {
            $valoresY[] = $m * $x[$i] + $b;
        }

        return $valoresY;
    }

    $datosX = json_encode($valoresx);
    $datosY = json_encode($valoresy);

    $regresion = calcularRegresionLineal($valoresx, $valoresy);
    $valoresRegresion = calcularValoresRegresion($valoresx, $regresion['m'], $regresion['b']);
?>

<div id="graficapunto"></div>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script type="text/javascript">
    var datos1 = <?php echo $datosX; ?>;
    var datos2 = <?php echo $datosY; ?>;

    var regresion = <?php echo json_encode($regresion); ?>;
    var valoresRegresion = <?php echo json_encode($valoresRegresion); ?>;

    var trace1 = {
        x: datos1,
        y: datos2,
        mode: 'markers',
        name: 'Resultado'
    };

    var trace2 = {
        x: datos1,
        y: valoresRegresion,
        mode: 'lines',
        name: 'Regresión lineal',
        line: {
            color: 'red'
        }
    };

    var data = [trace1, trace2];

    var layout = {
        title: 'Regresión lineal (m = ' + regresion.m + ', b = ' + regresion.b + ')',
        xaxis: {
            title: 'Puntuación Encuesta X',
        },
        yaxis: {
            title: 'Puntuación Encuesta Y'
        }
    };

    Plotly.newPlot('graficapunto', data, layout);
</script>
