<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre ='Inteligencia Emocional';
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
    echo $_SESSION["usuario"];

    include("includes/templates/menu.php");
    include("includes/templates/navbar.php");
    ?>
    <!-- Encabezado de pagina --->
    <div class="container"
        style="background-color:white; font-family: 'Raleway', sans-serif; margin-top: 48px; padding: 32px; border-radius: 20px;">
        <div class="row">
            <div class="col-lg-12">
                <h1>Cuestionario de Habilidades Emocionales</h1>
                <form method="post" action="procesar_cuestionario.php">
                    <fieldset class="pregunta">
                        <p>1. Cuando me enojo mucho ...</p>
                        <input type="radio" name="pregunta1" value="10"> analizo por qué me siento tan alterado.<br>
                        <input type="radio" name="pregunta1" value="0"> exploto y pierdo el control.<br>
                        <input type="radio" name="pregunta1" value="0"> lo oculto y permanezco tranquilo.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>2. En una situación en la que un colega se adjudicara en público el crédito de mi trabajo y
                            mis
                            ideas, yo tal vez...</p>
                        <input type="radio" name="pregunta2" value="0"> lo dejaría pasar y no haría nada para evitar una
                        confrontación.<br>
                        <input type="radio" name="pregunta2" value="5"> después, y en privado, le diría que aprecio que
                        se me
                        dé crédito por mi trabajo y mis ideas.<br>
                        <input type="radio" name="pregunta2" value="10"> le agradecería en público por tomar en cuenta
                        mi
                        trabajo y mis ideas, y luego hablaría más acerca de mis contribuciones.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>3. Cuando me acerco a otra persona para iniciar una conversación y esa persona no responde,
                            ...</p>
                        <input type="radio" name="pregunta3" value="5"> trato de animarla contándole algo gracioso.<br>
                        <input type="radio" name="pregunta3" value="10"> le pregunto si quiere hablar de lo que está
                        pensando.<br>
                        <input type="radio" name="pregunta3" value="0"> la dejaría sola y buscaría a alguien más con
                        quién hablar.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>4. Cuando ingreso a un grupo social, generalmente...</p>
                        <input type="radio" name="pregunta4" value="0"> permanezco callado y espero a que los demás me
                        hablen.<br>
                        <input type="radio" name="pregunta4" value="10"> trato de pensar en decir algo agradable a
                        alguien.<br>
                        <input type="radio" name="pregunta4" value="0"> busco formas de ser la estrella de la fiesta o
                        la fuente de energía y de diversión.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>5. Cuando se trata de temas importantes, generalmente…</p>
                        <input type="radio" name="pregunta5" value="5"> reflexiono solo e ignoro la opinión de los
                        demás.<br>
                        <input type="radio" name="pregunta5" value="10"> pondero ambas opiniones y hablo con otras
                        personas antes de tomar una decisión.<br>
                        <input type="radio" name="pregunta5" value="0"> escucho a mis amigos y colegas, y tomo la
                        decisión de ellos como propia.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>6. Cuando alguien que no me gusta se siente atraído afectivamente hacia mí, generalmente...
                        </p>
                        <input type="radio" name="pregunta6" value="10"> le digo directamente que no me interesa.<br>
                        <input type="radio" name="pregunta6" value="5"> respondo de manera amistosa pero fría o
                        distante.<br>
                        <input type="radio" name="pregunta6" value="0"> ignoro a esa persona y trato de evitarla.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>7. Cuando estoy en compañía de dos personas que tienen puntos de vista diametralmente
                            opuestos acerca de un tema (por ejemplo, política, aborto, guerra) y discuten al respecto …
                        </p>
                        <input type="radio" name="pregunta7" value="10"> busco algo en lo que ambos estén de acuerdo y
                        hago hincapié en ello.<br>
                        <input type="radio" name="pregunta7" value="5"> promuevo una batalla verbal.<br>
                        <input type="radio" name="pregunta7" value="0"> les sugiero que dejen de discutir y que se
                        tranquilicen.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>8. Cuando estoy practicando un deporte y voy en segundo o en último lugar, ...</p>
                        <input type="radio" name="pregunta8" value="0"> me pongo muy nervioso y espero no sofocarme.<br>
                        <input type="radio" name="pregunta8" value="5"> considero esto como una oportunidad para
                        sobresalir.<br>
                        <input type="radio" name="pregunta8" value="10"> permanezco concentrado y hago mi mayor
                        esfuerzo.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>9. Si tengo necesidad de salir del trabajo temprano para cumplir con alguna obligación
                            importante, pero mis compañeros me piden que me quede para terminar un trabajo,
                            probablemente...</p>
                        <input type="radio" name="pregunta9" value="0"> ignoraría mi obligación y me quedaría a terminar
                        el trabajo.<br>
                        <input type="radio" name="pregunta9" value="0"> exageraría un poco y diría a mis compañeros que
                        tengo una emergencia impostergable.<br>
                        <input type="radio" name="pregunta9" value="10"> pediría algún tipo de compensación por no poder
                        cumplir con mi obligación.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>10. En una situación en la que otra persona se enoja mucho y me grita, yo...</p>
                        <input type="radio" name="pregunta10" value="0"> también me enojo. No acepto eso de nadie.<br>
                        <input type="radio" name="pregunta10" value="0"> me voy. No tiene caso discutir.<br>
                        <input type="radio" name="pregunta10" value="10"> primero escucho y luego trato de discutir el
                        asunto.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>11. Cuando me encuentro con alguien que acaba de tener una gran pérdida o de vivir una
                            tragedia, ...</p>
                        <input type="radio" name="pregunta11" value="0"> realmente no sé qué hacer o qué decir.<br>
                        <input type="radio" name="pregunta11" value="10"> le digo que lo siento mucho y trato de
                        brindarle apoyo.<br>
                        <input type="radio" name="pregunta11" value="0"> le comparto mi experiencia de una pérdida o
                        tragedia similar.<br>
                    </fieldset>

                    <fieldset class="pregunta">
                        <p>12. Cuando alguien hace una broma racista o cuenta una historia despectiva acerca de un
                            miembro del sexo opuesto en una empresa mixta, yo generalmente...</p>
                        <input type="radio" name="pregunta12" value="10"> señalo que es inapropiado e inaceptable, y
                        luego cambio el tema.<br>
                        <input type="radio" name="pregunta12" value="0"> lo ignoro para no hacer una escena.<br>
                        <input type="radio" name="pregunta12" value="5"> me enojo mucho y digo a esa persona lo que
                        pienso de lo que acaba de decir.<br>
                    </fieldset>

                    <input type="submit" value="Enviar">
                </form>

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