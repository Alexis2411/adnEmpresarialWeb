<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre = 'Estilos de Comunicación';
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
                <form action="procesar_Estilo.php" method="post" onsubmit="return validarFormulario()">

                    <!-- Pregunta 1 -->
                    <p>1. Por lo general, enfrento los problemas difíciles:</p>
                    <label>a. Con una lluvia de ideas de soluciones:</label>
                    <input type="number" name="reactivo1_a" id="reactivo1_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(1)"><br>

                    <label>b. Evaluando alternativas de manera cuidadosa:</label>
                    <input type="number" name="reactivo1_b" id="reactivo1_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(1)"><br>

                    <label>c. Implicando a otras personas:</label>
                    <input type="number" name="reactivo1_c" id="reactivo1_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(1)"><br>

                    <label>d. Respondiendo con rapidez:</label>
                    <input type="number" name="reactivo1_d" id="reactivo1_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(1)"><br>

                    <p id="suma_reactivo1">Suma: 0</p>

                    <hr>

                    <!-- Pregunta 2 -->
                    <p>2. Mis amigos y mis colegas generalmente me consideran:</p>
                    <label>a. Creativo:</label>
                    <input type="number" name="reactivo2_a" id="reactivo2_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(2)"><br>

                    <label>b. Sistemático:</label>
                    <input type="number" name="reactivo2_b" id="reactivo2_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(2)"><br>

                    <label>c. Colaborador:</label>
                    <input type="number" name="reactivo2_c" id="reactivo2_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(2)"><br>

                    <label>d. Competitivo:</label>
                    <input type="number" name="reactivo2_d" id="reactivo2_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(2)"><br>

                    <p id="suma_reactivo2">Suma: 0</p>

                    <hr>

                    <!-- Pregunta 3 -->
                    <p>3. Soy bueno para:</p>
                    <label>a. Experimentar:</label>
                    <input type="number" name="reactivo3_a" id="reactivo3_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(3)"><br>

                    <label>b. Administrar:</label>
                    <input type="number" name="reactivo3_b" id="reactivo3_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(3)"><br>

                    <label>c. Facultar a las personas:</label>
                    <input type="number" name="reactivo3_c" id="reactivo3_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(3)"><br>

                    <label>d. Enfrentar desafíos:</label>
                    <input type="number" name="reactivo3_d" id="reactivo3_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(3)"><br>

                    <p id="suma_reactivo3">Suma: 0</p>

                    <hr>

                    <!-- Pregunta 4 -->
                    <p>4. Cuando termino un proyecto o una tarea, tiendo a:</p>
                    <label>a. Idear un nuevo proyecto:</label>
                    <input type="number" name="reactivo4_a" id="reactivo4_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(4)"><br>

                    <label>b. Revisar los resultados para encontrar la forma de mejorarlos:</label>
                    <input type="number" name="reactivo4_b" id="reactivo4_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(4)"><br>

                    <label>c. Compartir con otras personas lo que aprendí:</label>
                    <input type="number" name="reactivo4_c" id="reactivo4_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(4)"><br>

                    <label>d. Determinar el resultado o la evaluación de los resultados:</label>
                    <input type="number" name="reactivo4_d" id="reactivo4_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(4)"><br>

                    <p id="suma_reactivo4">Suma: 0</p>

                    <hr>

                    <!-- Pregunta 5 -->
                    <p>5. Me describo a mí mismo como:</p>
                    <label>a. Flexible:</label>
                    <input type="number" name="reactivo5_a" id="reactivo5_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(5)"><br>

                    <label>b. Organizado:</label>
                    <input type="number" name="reactivo5_b" id="reactivo5_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(5)"><br>

                    <label>c. Alguien que brinda apoyo:</label>
                    <input type="number" name="reactivo5_c" id="reactivo5_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(5)"><br>

                    <label>d. Motivado:</label>
                    <input type="number" name="reactivo5_d" id="reactivo5_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(5)"><br>

                    <p id="suma_reactivo5">Suma: 0</p>

                    <hr>

                    <!-- Pregunta 6 -->
                    <p>6. Me gusta trabajar en proyectos que:</p>
                    <label>a. Me permitan inventar algo nuevo:</label>
                    <input type="number" name="reactivo6_a" id="reactivo6_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(6)"><br>

                    <label>b. Ofrezcan mejoras prácticas:</label>
                    <input type="number" name="reactivo6_b" id="reactivo6_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(6)"><br>

                    <label>c. Involucran a otras personas:</label>
                    <input type="number" name="reactivo6_c" id="reactivo6_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(6)"><br>

                    <label>d. Pueden realizarse con rapidez:</label>
                    <input type="number" name="reactivo6_d" id="reactivo6_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(6)"><br>

                    <p id="suma_reactivo6">Suma: 0</p>

                    <hr>

                    <!-- Pregunta 7 -->
                    <p>7. Al resolver un problema:</p>
                    <label>a. Disfruto explorar muchas opciones:</label>
                    <input type="number" name="reactivo7_a" id="reactivo7_a" required min="0" max="100"
                        oninput="actualizarSumaReactivo(7)"><br>

                    <label>b. Reúno muchos datos:</label>
                    <input type="number" name="reactivo7_b" id="reactivo7_b" required min="0" max="100"
                        oninput="actualizarSumaReactivo(7)"><br>

                    <label>c. Me comunico mucho con los demás:</label>
                    <input type="number" name="reactivo7_c" id="reactivo7_c" required min="0" max="100"
                        oninput="actualizarSumaReactivo(7)"><br>

                    <label>d. Hago hincapié en terminar el trabajo:</label>
                    <input type="number" name="reactivo7_d" id="reactivo7_d" required min="0" max="100"
                        oninput="actualizarSumaReactivo(7)"><br>

                    <p id="suma_reactivo7">Suma: 0</p>

                    <hr>

                    <input type="submit" value="Enviar">
                </form>

                <script>
                    // Función para actualizar la suma de puntos en cada reactivo
                    function actualizarSumaReactivo(reactivo) {
                        const maxPoints = 100;
                        let totalSum = 0;
                        const sumInputIds = [`reactivo${reactivo}_a`, `reactivo${reactivo}_b`, `reactivo${reactivo}_c`, `reactivo${reactivo}_d`];

                        for (const inputId of sumInputIds) {
                            const inputValue = parseInt(document.getElementById(inputId).value) || 0;
                            totalSum += inputValue;
                        }

                        if (totalSum > maxPoints) {
                            const excessivePoints = totalSum - maxPoints;
                            let pointsLeftToDistribute = excessivePoints;

                            for (const inputId of sumInputIds) {
                                const inputValue = parseInt(document.getElementById(inputId).value) || 0;
                                const pointsToRemove = Math.min(inputValue, pointsLeftToDistribute);
                                document.getElementById(inputId).value = inputValue - pointsToRemove;
                                pointsLeftToDistribute -= pointsToRemove;

                                if (pointsLeftToDistribute === 0) {
                                    break;
                                }
                            }
                        }
                        if (totalSum > 100) {
                            totalSum == 100;
                        }

                        document.getElementById(`suma_reactivo${reactivo}`).textContent = `Suma: ${totalSum}`;
                    }

                    // Función para validar que la suma de puntos sea 100 en cada reactivo
                    function validarSumaReactivo(reactivo) {
                        const sumInputIds = [`reactivo${reactivo}_a`, `reactivo${reactivo}_b`, `reactivo${reactivo}_c`, `reactivo${reactivo}_d`];
                        let totalSum = 0;

                        for (const inputId of sumInputIds) {
                            const inputValue = parseInt(document.getElementById(inputId).value) || 0;
                            totalSum += inputValue;
                        }

                        if (totalSum !== 100) {
                            alert(`La suma de puntos en el reactivo ${reactivo} debe ser igual a 100.`);
                            return false;
                        }

                        return true;
                    }

                    // Función para validar todo el formulario antes de enviarlo
                    function validarFormulario() {
                        const numPreguntas = 7; // Modificar este número según la cantidad de preguntas
                        let formularioValido = true;

                        for (let i = 1; i <= numPreguntas; i++) {
                            formularioValido = formularioValido && validarSumaReactivo(i);
                        }

                        return formularioValido;
                    }
                </script>

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
