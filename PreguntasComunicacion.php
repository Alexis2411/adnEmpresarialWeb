<!DOCTYPE html>
<html>

<head>
    <title>Tabla de 2 columnas por 1 fila</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #ccc;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .container {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
        }

        select {
            padding: 5px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="post" action="procesar_comunicacion.php" onsubmit="return checkUniqueSelections(['selector1', 'selector2', 'selector3']);">  
        <h2>1. He permanecido en este trabajo durante seis meses, y casi no conozco a nadie de la organización. Parece
            que
            no puedo hacer amigos o que no logro que otras personas me acepten. La mayoría de la gente está sumamente
            ocupada y no tiene tiempo para socializar. Me siento aislado y excluido de lo que está ocurriendo.</h2>
        <table>
            <tr>
                <th>
                    a. No se preocupe por no hacer amigos tan pronto. Las cosas irán mejorando cuando tenga más tiempo
                    en la
                    organización, ya lo verá.<br>
                    b. Cuando usted conoce a alguien, ¿qué dice? ¿Es usted el primero en ser amistoso?<br>
                    c. Como los miembros de la organización están tan ocupados, probablemente ninguno tenga tiempo de
                    hacer
                    amigos cercanos. No debería esperar demasiado.<br>
                    d. Entonces, ¿siente que las personas no lo han aceptado en la organización?<br>
                    e. Cuando me uní a la organización, me tomó más de seis meses adaptarme. Aún no conozco a algunas
                    personas de varios departamentos.
                </th>
                <th>
                    <h2>Selecciona una opción:</h2>
                    <div class="container">
                        <label for="selector1">Opcion 1:</label>
                        <select name="selector1" id="selector1">
                            <option value=""></option>
                            <option value="1">a</option>
                            <option value="2">b</option>
                            <option value="3">c</option>
                            <option value="4">d</option>
                            <option value="5">e</option>
                        </select>
                    </div>

                    <div class="container">
                        <label for="selector2">Opcion 2:</label>
                        <select name="selector2" id="selector2">
                            <option value=""></option>
                            <option value="1">a</option>
                            <option value="2">b</option>
                            <option value="3">c</option>
                            <option value="4">d</option>
                            <option value="5">e</option>
                        </select>
                    </div>

                    <div class="container">
                        <label for="selector3">Opcion 3:</label>
                        <select name="selector3" id="selector3">
                            <option value=""></option>
                            <option value="1">a</option>
                            <option value="2">b</option>
                            <option value="3">c</option>
                            <option value="4">d</option>
                            <option value="5">e</option>
                        </select>
                    </div>
    </form>
    </th>
    </tr>
    </table>
    <h2>2. No soporto a mi jefe. Es la persona más autocrática y demandante que usted se pueda imaginar. Nunca había
        trabajando con alguien a quien le importaran tan poco sus empleados. Su absoluta insensibilidad y su falta de
        humanidad han hecho de éste un sitio lamentable para trabajar.</h2>
    <table>
        <tr>
            <th>
                a. Pareciera que estás teniendo dificultades para lidiar con la autoridad y el control rígido.<br>
                b. Sé lo que sientes porque el año pasado teníamos por jefe a una mujer en nuestro departamento que
                haría enloquecer a cualquiera. Era una persona muy dominante.<br>
                c. Vas a tener problemas a menos que soluciones esto. Pienso que debes ir con él y decirle cómo te
                sientes.<br>
                d. Realmente te está costando trabajo adaptarte a tu jefe, ¿verdad?<br>
                e. ¿Por qué te cae tan mal?<br>
            </th>
            <th>
                <h2>Selecciona una opción:</h2>
                <div class="container">
                    <label for="selector1.1">Opcion 1:</label>
                    <select name="selector1.1" id="selector1.1">
                        <option value=""></option>
                        <option value="4">a</option>
                        <option value="1">b</option>
                        <option value="3">c</option>
                        <option value="4">d</option>
                        <option value="2">e</option>
                    </select>
                </div>

                <div class="container">
                    <label for="selector2.1">Opcion 2:</label>
                    <select name="selector2.1" id="selector2.1">
                        <option value=""></option>
                        <option value="4">a</option>
                        <option value="1">b</option>
                        <option value="3">c</option>
                        <option value="4">d</option>
                        <option value="2">e</option>
                    </select>
                </div>

                <div class="container">
                    <label for="selector3.1">Opcion 3:</label>
                    <select name="selector3.1" id="selector3.1">
                        <option value=""></option>
                        <option value="4">a</option>
                        <option value="1">b</option>
                        <option value="3">c</option>
                        <option value="4">d</option>
                        <option value="2">e</option>
                    </select>
                </div>
                </form>
            </th>
        </tr>
    </table>
    <h2>3. Quiero saber qué pasó en la decisión del último ascenso. Creí que me elegirían a mí. Estoy seguro de que
        nadie en el departamento tiene mi experiencia, y los rumores que escuché indicaban que el puesto sería mío con
        sólo pedirlo. Realmente me decepcionó que hubieran elegido a una persona externa. Pienso que esto no es justo. Y
        a fin de cuentas, ¿qué se necesita para recibir un ascenso aquí?
    </h2>
    <table>
        <tr>
            <th>
                a. ¿Qué te hizo pensar que el ascenso te correspondía? ¿Conoces los requisitos del puesto y el tipo de
                persona que estábamos buscando?<br>
                b. No te sientas desalentado. Tu trabajo es bueno y, si eres paciente, estoy seguro de que vendrán otras
                oportunidades. Trataré de ayudarte a ser el siguiente la próxima vez<br>
                c. Pienso que tienes una impresión equivocada sobre esto. Los criterios para el nuevo puesto eran muy
                claros, y la otra persona era la más adecuada.<br>
                d. En otras palabras, te sientes confundido acerca del lugar que ocupas en la empresa.<br>
                e. ¿Estás interpretando la decisión de este ascenso como un desafío para tu competencia técnica?
            </th>
            <th>
                <h2>Selecciona una opción:</h2>
                <div class="container">
                    <label for="selector1.2">Opcion 1:</label>
                    <select name="selector1.2" id="selector1.2">
                        <option value=""></option>
                        <option value="2">a</option>
                        <option value="1">b</option>
                        <option value="3">c</option>
                        <option value="4">d</option>
                        <option value="2">e</option>
                    </select>
                </div>

                <div class="container">
                    <label for="selector2.2">Opcion 2:</label>
                    <select name="selector2.2" id="selector2.2">
                        <option value=""></option>
                        <option value="2">a</option>
                        <option value="1">b</option>
                        <option value="3">c</option>
                        <option value="4">d</option>
                        <option value="2">e</option>
                    </select>
                </div>

                <div class="container">
                    <label for="selector3.2">Opcion 3:</label>
                    <select name="selector3.2" id="selector3.2">
                        <option value=""></option>
                        <option value="2">a</option>
                        <option value="1">b</option>
                        <option value="3">c</option>
                        <option value="4">d</option>
                        <option value="2">e</option>
                    </select>
                </div>
                </form>
            </th>
        </tr>
    </table>
    <h2>4. Oye, ¿por qué no se aprobó mi solicitud de una nueva computadora personal? Verdaderamente la necesito en la
        oficina. Hemos tenido tanto trabajo que una máquina no es suficiente, y estamos haciendo a mano las actividades
        que se deben hacer en una hoja de cálculo. Y no me cuentes nuevamente esa vieja historia acerca de la limitación
        de recursos en la empresa. Hace ya mucho tiempo que estoy en espera de un nuevo equipo.
    </h2>
    <table>
        <tr>
            <th>
                a. Entiendo que estés realmente molesto por no haber obtenido la aprobación de tu solicitud.<br>
                b. ¿Para qué necesitas una computadora nueva? ¿Podrías pedir una prestada cuando estés realmente
                saturado?<br>
                c. No eres el único que tiene ese problema. Tenemos muchas dificultades tratando de hacer todo el
                trabajo con las máquinas que tenemos<br>
                d. Si tienes un poco de paciencia, estoy seguro de que se me ocurrirá una solución para tu problema.<br>
                e. Tu petición se rechazó porque los recursos en verdad son escasos. Tendrás que arreglártelas con las
                máquinas que tienes.<br>
            </th>
            <th>
                <h2>Selecciona una opción:</h2>
                <div class="container">
                    <label for="selector1.3">Opcion 1:</label>
                    <select name="selector1.3" id="selector1.3">
                        <option value=""></option>
                        <option value="4">a</option>
                        <option value="2">b</option>
                        <option value="1">c</option>
                        <option value="1">d</option>
                        <option value="3">e</option>
                    </select>
                </div>

                <div class="container">
                    <label for="selector2.3">Opcion 2:</label>
                    <select name="selector2.3" id="selector2.3">
                        <option value=""></option>
                        <option value="4">a</option>
                        <option value="2">b</option>
                        <option value="1">c</option>
                        <option value="1">d</option>
                        <option value="3">e</option>
                    </select>
                </div>

                <div class="container">
                    <label for="selector3.3">Opcion 3:</label>
                    <select name="selector3.3" id="selector3.3">
                        <option value=""></option>
                        <option value="4">a</option>
                        <option value="2">b</option>
                        <option value="1">c</option>
                        <option value="1">d</option>
                        <option value="3">e</option>
                    </select>
                </div>
                </form>
            </th>
        </tr>
    </table>
    <input type="submit" value="Enviar respuestas">

</body>

</html>
<script>
    // Función para verificar selecciones únicas en un conjunto de selectores
    function checkUniqueSelections(selectorIds) {
        const selectedValues = [];
        for (const selectorId of selectorIds) {
            const selector = document.getElementById(selectorId);
            const selectedValue = selector.value;
            if (selectedValue === "") {
                alert("Por favor, seleccione una opción para cada pregunta.");
                return false;
            }
            if (selectedValues.includes(selectedValue)) {
                alert("No puede seleccionar la misma opción en más de un selector.");
                return false;
            }
            selectedValues.push(selectedValue);
        }
        return true;
    }
</script>