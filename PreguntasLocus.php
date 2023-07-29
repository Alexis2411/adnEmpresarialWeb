<?php
date_default_timezone_set('America/Mexico_City');
include "includes/function/session.php";
include "includes/function/funciones.php";
$nombre = 'Locus de Control';
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
                <form action="procesar_lotus.php" method="post">
                    <p><strong>Este cuestionario evalúa sus opiniones acerca de ciertos temas. Cada reactivo
                            consiste en un par de
                            opciones marcadas con las letras a o b. Seleccione aquella con la que esté más de
                            acuerdo. Si usted está
                            de acuerdo con ambas opciones hasta cierto grado, seleccione aquella con la que más se
                            identifique. Si
                            usted no está de acuerdo con ninguna de las opciones, entonces marque aquella con la que
                            esté menos en
                            desacuerdo.</strong></p>

                    <fieldset class="pregunta">
                        <p>Reactivo 1</p>
                        <input type="radio" name="pregunta1" value="1"> a. Los líderes nacen, no se hacen.<br>
                        <input type="radio" name="pregunta1" value="0"> b. Los líderes se hacen, no nacen<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 2</p>
                        <input type="radio" name="pregunta2" value="1"> a. La gente a menudo tiene éxito porque está
                        en el lugar
                        correcto en el momento adecuado.<br>
                        <input type="radio" name="pregunta2" value="0"> b. El éxito depende en su mayoría del
                        trabajo arduo y la
                        capacidad.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 3</p>
                        <input type="radio" name="pregunta3" value="1"> a. Cuando las cosas van mal en mi vida,
                        generalmente es
                        porque cometí errores.<br>
                        <input type="radio" name="pregunta3" value="0"> b. Las calamidades ocurren en mi vida sin
                        importar lo que yo
                        haga.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 4</p>
                        <input type="radio" name="pregunta4" value="1"> a. El hecho de que haya guerra o no depende
                        de las acciones
                        de ciertos líderes mundiales.<br>
                        <input type="radio" name="pregunta4" value="0"> b. Es inevitable que el mundo continúe
                        sufriendo
                        guerras.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 5</p>
                        <input type="radio" name="pregunta5" value="1"> a. Los hijos buenos son principalmente el
                        resultado de
                        buenos padres.<br>
                        <input type="radio" name="pregunta5" value="0"> b. Algunos hijos se vuelven malos sin
                        importar cómo se
                        comporten sus padres.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 6</p>
                        <input type="radio" name="pregunta6" value="1"> a. Mi éxito futuro depende principalmente de
                        circunstancias
                        que escapan a mi control.<br>
                        <input type="radio" name="pregunta6" value="0"> b. Soy el dueño de mi destino.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 7</p>
                        <input type="radio" name="pregunta7" value="1"> a. La historia juzga que ciertas personas
                        fueron líderes
                        eficaces principalmente porque las circunstancias los hicieron visibles y exitosos.<br>
                        <input type="radio" name="pregunta7" value="0"> b. Los líderes eficaces son aquellos que
                        toman decisiones o
                        acciones que dan como resultado contribuciones significativas.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 8</p>
                        <input type="radio" name="pregunta8" value="1"> a. Evitar el castigo a los niños garantiza
                        que crecerán como
                        personas irresponsables.<br>
                        <input type="radio" name="pregunta8" value="0"> b. Nunca es apropiado disciplinar
                        físicamente a los
                        niños.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 9</p>
                        <input type="radio" name="pregunta9" value="1"> a. A menudo siento que tengo poca influencia
                        en la dirección
                        que está tomando mi vida.<br>
                        <input type="radio" name="pregunta9" value="0"> b. No es razonable pensar que el destino o
                        la suerte tienen
                        importancia crucial en la dirección de mi vida.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 10</p>
                        <input type="radio" name="pregunta10" value="1"> a. Algunos clientes nunca estarán
                        satisfechos sin importar
                        lo que uno haga.<br>
                        <input type="radio" name="pregunta10" value="0"> b. Uno puede satisfacer a los clientes al
                        darles lo que
                        desean cuando lo desean.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 11</p>
                        <input type="radio" name="pregunta11" value="1"> a. Cualquier persona puede obtener buenos
                        resultados en la
                        escuela si trabaja con el esfuerzo suficiente.<br>
                        <input type="radio" name="pregunta11" value="0"> b. Algunas personas nunca destacarán en la
                        escuela sin
                        importar lo mucho que se esfuercen.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 12</p>
                        <input type="radio" name="pregunta12" value="1"> a. Los buenos matrimonios resultan cuando
                        ambos cónyuges
                        trabajan continuamente en la relación.<br>
                        <input type="radio" name="pregunta12" value="0"> b. Algunos matrimonios fracasan porque los
                        cónyuges
                        simplemente son incompatibles.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 13</p>
                        <input type="radio" name="pregunta13" value="1"> a. Tengo confianza en que puedo mejorar mis
                        habilidades
                        básicas de liderazgo a través del aprendizaje y la práctica.<br>
                        <input type="radio" name="pregunta13" value="0"> b. Es una pérdida de tiempo tratar de
                        mejorar las
                        habilidades de liderazgo en un salón de clases.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 14</p>
                        <input type="radio" name="pregunta14" value="1"> a. Deberían enseñarse más cursos de
                        habilidades de
                        liderazgo en las escuelas de negocios.<br>
                        <input type="radio" name="pregunta14" value="0"> b. Se debe poner menos énfasis en las
                        habilidades de
                        liderazgo dentro de las escuelas de negocios.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 15</p>
                        <input type="radio" name="pregunta15" value="1"> a. Cuando recuerdo las cosas buenas que me
                        han sucedido,
                        pienso que pasaron porque hice algo bueno.<br>
                        <input type="radio" name="pregunta15" value="0"> b. Las cosas malas que han pasado en mi
                        vida son resultado
                        principalmente de circunstancias fuera de mi control.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 16</p>
                        <input type="radio" name="pregunta16" value="1"> a. Muchos de los exámenes que presenté en
                        la escuela no
                        tenían conexión con el material que yo había estudiado, así que estudiar mucho no me ayudó
                        en lo
                        absoluto.<br>
                        <input type="radio" name="pregunta16" value="0"> b. Cuando me preparaba bien para los
                        exámenes en la
                        escuela, generalmente obtenía un buen resultado.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 17</p>
                        <input type="radio" name="pregunta17" value="1"> a. A veces me veo influido por lo que dice
                        mi
                        horóscopo.<br>
                        <input type="radio" name="pregunta17" value="0"> b. Sin importar la posición de los astros,
                        puedo determinar
                        mi propio destino.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 18</p>
                        <input type="radio" name="pregunta18" value="1"> a. El gobierno es tan grande y burocrático,
                        que es muy
                        difícil que alguien provoque un efecto en lo que sucede.<br>
                        <input type="radio" name="pregunta18" value="0"> b. Los individuos, por sí mismos, pueden
                        tener una
                        influencia real en la política si levantan sus voces y dan a conocer sus deseos.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 19</p>
                        <input type="radio" name="pregunta19" value="1"> a. Las personas buscan responsabilidad en
                        el trabajo.<br>
                        <input type="radio" name="pregunta19" value="0"> b. Las personas tratan de salirse con la
                        suya trabajando lo
                        menos posible.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 20</p>
                        <input type="radio" name="pregunta20" value="1"> a. Los individuos más populares parecen
                        tener un carisma
                        especial inherente para atraer a la gente.<br>
                        <input type="radio" name="pregunta20" value="0"> b. Los individuos se vuelven populares por
                        su
                        comportamiento.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 21</p>
                        <input type="radio" name="pregunta21" value="1"> a. En mi vida parecen suceder cosas sobre
                        las que tengo
                        poco control.<br>
                        <input type="radio" name="pregunta21" value="0"> b. La mayor parte del tiempo me siento
                        responsable por los
                        resultados que obtengo.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 22</p>
                        <input type="radio" name="pregunta22" value="1"> a. Los directivos que mejoren su
                        competencia personal
                        tendrán mayor éxito que aquellos que no lo hagan.<br>
                        <input type="radio" name="pregunta22" value="0"> b. El éxito en las habilidades directivas
                        tiene poco que
                        ver con la competencia que posea el director.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 23</p>
                        <input type="radio" name="pregunta23" value="1"> a. Los equipos que ganan campeonatos en la
                        mayoría de los
                        deportes generalmente son los que, a fin de cuentas, tienen más suerte.<br>
                        <input type="radio" name="pregunta23" value="0"> b. Con mayor frecuencia, los equipos que
                        ganan los
                        campeonatos son aquellos que tienen a los jugadores más hábiles y que tienen la mejor
                        preparación.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 24</p>
                        <input type="radio" name="pregunta24" value="1"> a. El trabajo en equipo en los negocios es
                        un requisito
                        para el éxito.<br>
                        <input type="radio" name="pregunta24" value="0"> b. El esfuerzo individual es la mejor clave
                        del éxito.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 25</p>
                        <input type="radio" name="pregunta25" value="1"> a. Algunos empleados simplemente son
                        perezosos y no se les
                        puede motivar de ningún modo.<br>
                        <input type="radio" name="pregunta25" value="0"> b. Si usted es un directivo hábil, puede
                        motivar a casi
                        cualquier empleado para que se esfuerce más en el trabajo.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 26</p>
                        <input type="radio" name="pregunta26" value="1"> a. A la larga, las personas pueden mejorar
                        la fuerza
                        económica de un país a través de acciones responsables.<br>
                        <input type="radio" name="pregunta26" value="0"> b. La salud económica de este país se
                        encuentra, en gran
                        parte, más allá del control de los individuos.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 27</p>
                        <input type="radio" name="pregunta27" value="1"> a. Soy persuasivo cuando sé que tengo
                        razón.<br>
                        <input type="radio" name="pregunta27" value="0"> b. Soy capaz de convencer a la mayoría de
                        la gente aun
                        cuando no me sienta seguro de estar en lo correcto.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 28</p>
                        <input type="radio" name="pregunta28" value="1"> a. Tiendo a planear con anticipación y a
                        dar los pasos
                        necesarios para cumplir las metas que he establecido.<br>
                        <input type="radio" name="pregunta28" value="0"> b. Rara vez planeo el futuro porque las
                        cosas generalmente
                        salen bien de cualquier forma.<br>
                    </fieldset>
                    <fieldset class="pregunta">
                        <p>Reactivo 29</p>
                        <input type="radio" name="pregunta29" value="1"> a. Algunas cosas simplemente están
                        destinadas a
                        suceder.<br>
                        <input type="radio" name="pregunta29" value="0"> b. Podemos cambiar cualquier cosa en
                        nuestra vida con
                        trabajo arduo, persistencia y habilidad.<br>
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