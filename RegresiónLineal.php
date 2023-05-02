<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/sessionadmin.php";
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include_once 'admin/templates/header.php';
  ?>
  <title>ADN | Inicio</title>
  <script src="js/plotly-2.20.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="js/grafica.js"></script> 
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
    include_once 'admin/templates/navbar.php';
    include_once 'admin/templates/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Regresión Lineal</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Filtros</h3>
              </div>
              <form role="form" id="form-filtros">
                <div class="card-body">
                  <div class="form-group">
                    <label for="dato">Dato:</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dato" id="inlineRadio1" value="grado_estudios">
                      <label class="form-check-label" for="inlineRadio1">Grado de estudios</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dato" id="inlineRadio2" value="genero">
                      <label class="form-check-label" for="inlineRadio2">Género</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dato" id="inlineRadio2" value="cargo">
                      <label class="form-check-label" for="inlineRadio2">Cargo</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dato" id="inlineRadio2" value="antiguedad">
                      <label class="form-check-label" for="inlineRadio2">Antigüedad</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dato" id="inlineRadio2" value="num_colaboradores">
                      <label class="form-check-label" for="inlineRadio2">Tamaño</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dato" id="inlineRadio2" value="estado">
                      <label class="form-check-label" for="inlineRadio2">Estado</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="num_encuesta">Seleccione la encuesta:</label>
                    <select class="form-control" name="num_encuesta">
                      <option value="5">Diagnostico para la comunicacion de apoyo</option>
                      <option value="8">Evaluación del manejo del estrés</option>
                      <option value="11">Diagnóstico para la solución creativa</option>
                      <option value="14">Ganar Poder e Influencia</option>
                      <option value="25">Estrategias de influencia</option>
                      <option value="28">Diagnóstico para motivar a los demás</option>
                      <option value="29">Manejo de conflictos interpersonales</option>
                      <option value="30">Facultamiento y Delegación Eficaces</option>
                      <option value="31">Facultamiento Personal</option>
                      <option value="32">Comportamientos Para el Desarrollo</option>
                      <option value="33">Necesidad de Formación de Equipos</option>
                      <option value="34">Liderar el Cambio Positivo</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6">
            <div class="panel panel-body">
              <div clas="col-sm-12">
                <div id="graficapunto"></div>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    </div>
    <!-- /.content-wrapper -->

    <?php
    include_once 'admin/templates/footer.php';
    ?>
  </div>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function() {
    $('#graficapunto').load("admin/templates/graficapunto.php");
  });
</script>