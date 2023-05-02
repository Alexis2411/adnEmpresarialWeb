<?php
    $dato = $_POST['dato'];
    $num_encuesta = $_POST['num_encuesta'];
    require_once "conexion.php";
    $conexion= conexion();
    $sql=   "SELECT  $dato, resultado from usuario u INNER JOIN directivo d ON u.id_usuario = d.id_usuario 
            INNER JOIN resultado r ON r.id_usuario = u.id_usuario 
            INNER JOIN empresa e ON e.id_usuario = u.id_usuario 
            INNER JOIN (
            SELECT id_usuario, MAX(fecha) AS ultima_fecha 
            FROM resultado 
            WHERE id_seccion = '$num_encuesta'
            GROUP BY id_usuario) ultima_fecha_por_usuario ON r.id_usuario = ultima_fecha_por_usuario.id_usuario AND r.fecha = ultima_fecha_por_usuario.ultima_fecha
            WHERE id_seccion = '$num_encuesta'";
    $result=mysqli_query($conexion, $sql);
    $valoresy=array();
    $valoresx=array();
    while ($ver=mysqli_fetch_row($result)){
        $valoresx[]=$ver[0];
        $valoresy[]=$ver[1]/2;
    }
    $datosX=json_encode($valoresx);
    $datosY=json_encode($valoresy);
?>

<div id="graficapunto"></div>

<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr =[];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">
    datos1=crearCadenaLineal('<?php echo $datosX?>');
    datos2=crearCadenaLineal('<?php echo $datosY?>');
    console.log(datos1, datos2);
    var trace1 = {
        x: datos1,
        y: datos2,
        mode: 'markers',
        name: 'estados'
    };

    var data = [trace1];

    var layout = {
        title: 'Grafico de dispersion',
        xaxis: {
            title: <?php echo json_encode($dato); ?>,
            tickvals: datos1
        },
        yaxis: {
            title: 'Puntuación'
        }
    };

    Plotly.newPlot('graficapunto', data, layout);
</script>