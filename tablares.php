<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Resultados</title>
	<!-- Incluir los archivos CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<h2>Tabla de Resultados</h2>
		<table class="table table-striped table-bordered">
			<thead class = "thead-dark">
				<tr>
					<th>Fecha</th>
					<th>Resultado</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Establecer la conexión a la base de datos
                    include "includes/function/funciones.php";    
					$resultado = myScore(14);
					
					// Mostrar los resultados en una tabla
					if (mysqli_num_rows($resultado) > 0) {
					    while($fila = mysqli_fetch_assoc($resultado)) {
					        echo "<tr><td>" . $fila["fecha"] . "</td><td>" . $fila["resultado"] . "</td></tr>";
					    }
					} else {
					    echo "<tr><td colspan='2'>No se encontraron resultados</td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>
	<!-- Incluir los archivos JS de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>