<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre = 'Reajuste Social';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr" style="min-height: 100%; position: relative;">

<head>
    <?php
    include("includes/templates/head.php");
    $titulo = "Encuesta $nombre";
    tittle($titulo);
    ?>
    <link rel="stylesheet" href="css/estilos_preguntas.css">
    <style>
        .pregunta {
            display: flex;
            align-items: center;
        }

        /* Estilo para agregar un espacio entre el número de inciso y el texto */
        .pregunta p {
            margin-left: 10px;
        }

        /* Estilo para el valor entre paréntesis */
        .pregunta span {
            margin-left: 5px;
        }

        /* Estilos para la burbuja flotante */
        .burbuja {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #003857;
            color: white;
            height: 75px;
            font-weight: bold;
            padding: 10px;
            border-radius: 50%;
            font-size: 50px;
            display: none;
            text-align: center;
            align-items: center;
        }
    </style>
</head>

<body style="background: lightgray; font-size: 20px; line-height: 25px; margin:0; font-family:'Raleway', sans-serif;">
    <?php

    include("includes/templates/menu.php");
    include("includes/templates/navbar.php");
    ?>
    <!-- Encabezado de pagina --->
    <div class="container"
        style="background-color:white; font-family: 'Raleway', sans-serif; margin-top: 48px; padding: 32px; border-radius: 20px;">
        <div class="row">
            <div class="col-lg-12">
                <h1>Cuestionario de Habilidades Emocionales</h1>
                <form action="procesar_reajuste.php" method="post">
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="87" onchange="actualizarBurbuja()">
                        <p>1. Muerte del cónyuge o compañero <span>(87)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="79" onchange="actualizarBurbuja()">
                        <p>2. Muerte de un miembro cercano de la familia <span>(79)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="78" onchange="actualizarBurbuja()">
                        <p>3. Lesión o enfermedad importante en uno mismo <span>(78)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="76" onchange="actualizarBurbuja()">
                        <p>4. Detención en la cárcel o en alguna otra institución <span>(76)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="72" onchange="actualizarBurbuja()">
                        <p>5. Lesión importante o enfermedad de un miembro cercano de la familia <span>(72)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="71" onchange="actualizarBurbuja()">
                        <p>6. Pérdida de hipoteca o préstamo <span>(71)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="71" onchange="actualizarBurbuja()">
                        <p>7. Divorcio <span>(71)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="70" onchange="actualizarBurbuja()">
                        <p>8. Ser víctima de un delito <span>(70)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="69" onchange="actualizarBurbuja()">
                        <p>9. Ser víctima de brutalidad policial <span>(69)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="69" onchange="actualizarBurbuja()">
                        <p>10. Infidelidad <span>(69)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="69" onchange="actualizarBurbuja()">
                        <p>11. Experimentar violencia doméstica o abuso sexual <span>(69)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="66" onchange="actualizarBurbuja()">
                        <p>12. Separación o reconciliación con cónyuge o compañero <span>(66)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="64" onchange="actualizarBurbuja()">
                        <p>13. Ser despedido de una empresa o estar desempleado <span>(64)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="62" onchange="actualizarBurbuja()">
                        <p>14. Experimentar problemas o dificultades financieros <span>(62)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="61" onchange="actualizarBurbuja()">
                        <p>15. Muerte de un amigo cercano <span>(61)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="59" onchange="actualizarBurbuja()">
                        <p>16. Sobrevivir a un desastre <span>(59)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="59" onchange="actualizarBurbuja()">
                        <p>17. Convertirse en padre o madre soltero <span>(59)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="56" onchange="actualizarBurbuja()">
                        <p>18. Asumir la responsabilidad de una persona amada anciana o enferma <span>(56)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="56" onchange="actualizarBurbuja()">
                        <p>19. Pérdida o reducción importante en las prestaciones o seguro médico <span>(56)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="56" onchange="actualizarBurbuja()">
                        <p>20. Arresto de un miembro cercano de la familia o de uno mismo por infringir la ley
                            <span>(56)</span>
                        </p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="53" onchange="actualizarBurbuja()">
                        <p>21. Desacuerdo importante por pensión alimenticia, custodia o días de visita de los
                            hijos<span>(53)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="53" onchange="actualizarBurbuja()">
                        <p>22. Sufrir o tomar parte en un accidente automovilístico <span>(53)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="53" onchange="actualizarBurbuja()">
                        <p>23. Ser objeto de una sanción de disciplina o degradación en el trabajo <span>(53)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="51" onchange="actualizarBurbuja()">
                        <p>24. Enfrentar un embarazo no deseado <span>(51)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="50" onchange="actualizarBurbuja()">
                        <p>25. Hijo adulto que se muda a vivir con sus padres, o los padres que se mudan a vivir con
                            hijos adultos
                            <span>(50)</span>
                        </p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="49" onchange="actualizarBurbuja()">
                        <p>26. Un hijo desarrolla problemas de aprendizaje o de comportamiento <span>(49)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="48" onchange="actualizarBurbuja()">
                        <p>27. Experimentar discriminación laboral o acoso sexual en el trabajo <span>(48)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="47" onchange="actualizarBurbuja()">
                        <p>28. Intentar modificar un comportamiento personal adictivo <span>(47)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="46" onchange="actualizarBurbuja()">
                        <p>29. Descubrir o intentar modificar un comportamiento adictivo de un miembro cercano de la
                            familia
                            <span>(46)</span>
                        </p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="45" onchange="actualizarBurbuja()">
                        <p>30. Reorganización o recorte de personal del empleador <span>(45)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="44" onchange="actualizarBurbuja()">
                        <p>31. Manejo de infertilidad y abortos <span>(44)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="43" onchange="actualizarBurbuja()">
                        <p>32. Casarse o volver a casarse <span>(43)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="43" onchange="actualizarBurbuja()">
                        <p>33. Cambiar de empleo o de carrera <span>(43)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="42" onchange="actualizarBurbuja()">
                        <p>34. No obtener una hipoteca <span>(42)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="41" onchange="actualizarBurbuja()">
                        <p>35. Embarazo personal o de la esposa o compañera <span>(41)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="39" onchange="actualizarBurbuja()">
                        <p>36. Experimentar discriminación o acoso fuera del lugar de trabajo <span>(39)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="39" onchange="actualizarBurbuja()">
                        <p>37. Salir de la cárcel <span>(39)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="38" onchange="actualizarBurbuja()">
                        <p>38. Cónyuge o compañero deja de trabajar fuera de casa <span>(38)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="37" onchange="actualizarBurbuja()">
                        <p>39. Importante desacuerdo con el jefe o con un compañero de trabajo <span>(37)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="35" onchange="actualizarBurbuja()">
                        <p>40. Cambio de casa <span>(35)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="34" onchange="actualizarBurbuja()">
                        <p>41. Encontrar cuidado o una guardería adecuada para los hijos <span>(34)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="33" onchange="actualizarBurbuja()">
                        <p>42. Experimentar una ganancia monetaria importante e inesperada <span>(33)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="33" onchange="actualizarBurbuja()">
                        <p>43. Cambiar de puesto (transferencia o ascenso) <span>(33)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="33" onchange="actualizarBurbuja()">
                        <p>44. Recibir a un nuevo miembro de la familia <span>(33)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="32" onchange="actualizarBurbuja()">
                        <p>45. Cambio de responsabilidades laborales <span>(32)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="30" onchange="actualizarBurbuja()">
                        <p>46. Un hijo se va de casa <span>(30)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="30" onchange="actualizarBurbuja()">
                        <p>47. Obtener hipoteca para una casa <span>(30)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="30" onchange="actualizarBurbuja()">
                        <p>48. Obtener un préstamo importante distinto a una hipoteca para casa <span>(30)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="28" onchange="actualizarBurbuja()">
                        <p>49. Jubilación <span>(28)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="26" onchange="actualizarBurbuja()">
                        <p>50. Comenzar o terminar una educación formal <span>(26)</span></p>
                    </div>
                    <div class="pregunta">
                        <input type="checkbox" name="situacion[]" value="22" onchange="actualizarBurbuja()">
                        <p>51. Hacerse acreedor a una multa por infringir la ley <span>(22)</span></p>
                    </div>

                    <!-- Resto de las preguntas -->
                    <input type="submit" value="Calcular Puntuación">
                </form>
                <!-- Div para mostrar la burbuja flotante -->
                <div class="burbuja" id="burbuja"></div>

                <!-- Repite el mismo patrón para las demás preguntas -->


            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <script src="js/app.js"></script>
    <footer class="page-footer font-small text-secondary pt-4 fixed-bottom"
        style="background-color:#404040; position:relative; bottom:0; width:100%; font-family:'Raleway', sans-serif;">
        <p class="text-center"><em>Sus respuestas serán anónimas y absolutamente confidenciales. Los cuestionarios serán
                procesados automáticamente.</em></p>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
    </footer>
    <!-- FOOTER -->

</body>

</html>
<style>
    fieldset.pregunta {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }
</style>
<script>
    // Función para actualizar la puntuación en la burbuja
    function actualizarBurbuja() {
        const checkboxes = document.querySelectorAll('input[name="situacion[]"]:checked');
        let puntuacion = 0;

        checkboxes.forEach(checkbox => {
            puntuacion += parseInt(checkbox.value);
        });

        // Actualiza el contenido de la burbuja con la puntuación
        const burbuja = document.getElementById('burbuja');
        burbuja.innerText = puntuacion;

        // Muestra la burbuja si hay elementos seleccionados, o la oculta si no hay ninguno seleccionado
        burbuja.style.display = checkboxes.length > 0 ? 'block' : 'none';
    }
</script>