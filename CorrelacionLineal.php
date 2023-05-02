<!DOCTYPE html>
<html>
<head>
    <title>Gráfica de correlación lineal</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src= "js/plotly-2.20.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    <canvas id="grafica"></canvas>
    <script>
        var ctx = document.getElementById('grafica').getContext('2d');
        var chartData = [];
        var chartLabels = [];

        // Hacer una petición AJAX a un archivo PHP que devuelva los datos
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Convertir la respuesta JSON en un objeto JavaScript
                var datos = JSON.parse(this.responseText);
                // Obtener los valores de resultado y estado y almacenarlos en arrays separados
                for (var i = 0; i < datos.length; i++) {
                    chartData.push(datos[i].resultado);
                    chartLabels.push(datos[i].estado);
                }
                // Crear la gráfica de correlación lineal
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: chartLabels,
                        datasets: [{
                            label: 'Correlación lineal',
                            data: chartData,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            }
        };
        xhttp.open("GET", "datos.php", true);
        xhttp.send();
    </script>
</body>
</html>
