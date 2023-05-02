$(document).ready(function() {
    $('#form-filtros').submit(function(event) {
      event.preventDefault(); // evita la solicitud por defecto
  
      // Obtiene los valores de los campos del formulario
      var dato = $('input[name="dato"]:checked').val();
      var num_encuesta = $('select[name="num_encuesta"]').val();
  
      // Realiza la solicitud AJAX
      $.ajax({
        type: "POST",
        url: "admin/templates/graficapunto.php",
        data: { dato: dato, num_encuesta: num_encuesta },
        success: function(response) {
          $('#graficapunto').html(response);
        }
      });
    });
  });