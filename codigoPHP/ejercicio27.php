<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        @font-face {
            font-family: LibreCaslon;
            src: url(../webroot/fonts/Libre_Caslon_Text/LibreCaslonText-Italic.ttf);
        }
        .contenedor {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
        }
        .contenedor *{
            font-family: LibreCaslon;
            letter-spacing: 1px;
        }
        /* Títulos */
        .contenedor h1 {
            color: #12762c;
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 5px;
        }

        .contenedor h2 {
            color: #12762c;
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        /* Logo */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 80px;
            height: auto;
        }

        /* Campos del formulario */
        .formulario {
            padding: 10px;
        }

        .campo {
            margin-bottom: 20px;
        }

        .campo label {
            font-weight: bold;
            color: #333;
            display: inline-block;
            margin-bottom: 5px;
        }

        .obligatorio {
            color: red;
        }

        /* Estilo general para cuadros */
        input[type="text"], 
        input[type="date"], 
        input[type="number"], 
        select,
        textarea{
            border: 1px solid #000;
            padding: 5px;
            background-color: #FFFFE0;
        }

        /* Estilos específicos para campo nombre_apellidos */
        #nombre_apellidos {
            width: 50%;
            max-width: 500px; 
        }

        /* Estilos para campo de fecha */
        input[type="date"] {
            width: 150px;
        }

        /* Estilos para los Radio Buttons */
        .opciones-radio {
            display: grid;
            grid-template-columns: auto 30px; /* Columna para el texto y columna pequeña para el radio */
            gap: 5px;
            max-width: 150px; /* Para agruparlos */
            align-items: center;
        }

        .opciones-radio label {
            font-weight: normal;
        }

        .opciones-radio input[type="radio"] {
            width: 20px; 
            height: 20px;
            border: 2px solid black;
            border-radius: 15px;
            cursor: pointer;
        }

        /* Estilos para campo de puntuación */
        #puntuacion_curso {
            width: 50px;
            text-align: center;
        }

        /* Estilo para el campo desplegable */
        #vacaciones {
            width: 350px;
        }

        /* Estilo para el área de texto */
        #estado_animo {
            width: 100%;
            resize: vertical; /* Permite redimensionar solo verticalmente */
        }

        /* Botón de ENVIAR */
        .boton-contenedor {
            text-align: center;
            margin-top: 30px;
        }

        .enviar {
            padding: 4px 30px;
            background-color: #ccc; /* Fondo gris */
            border: 1px solid #666; /* Borde gris más oscuro */
            color: #195b13ff;
            font-size: 1em;
            cursor: pointer;
        }

        /* Respuesta */
        .respuesta-contenedor{
            padding-left: 100px;
            word-spacing: 5px;
        }
        .respuesta-contenedor p{
            margin-bottom: 10px;
        }
        .respuesta{
            color: #5983b0;
        }
    </style>
</head>
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 27</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 06/10/2025
        * 27.Ejercicio extra para probar la plantilla del formulario que ha ganado el concurso
        */
        require_once "../core/231018libreriaValidacion.php"; // importamos nuestra libreria
       
        $entradaOK = true; //Variable que nos indica que todo va bien
        $aErrores = [  //Array donde recogemos los mensajes de error
            'nombre_apellidos' => '', 
            'fecha_nacimiento' => '', 
            'sentimiento'=> '',
            'puntuacion_curso'=> '',
            'vacaciones'=> '',
            'estado_animo'=> ''
        ];
        $aRespuestas=[ //Array donde recogeremos la respuestas correctas (si $entradaOK)
            'nombre_apellidos' => '', 
            'fecha_nacimiento' => '', 
            'sentimiento'=> '',
            'puntuacion_curso'=> '',
            'vacaciones'=> '',
            'estado_animo'=> ''
        ]; 
        //Para cada campo del formulario: Validar entrada y actuar en consecuencia
        if (isset($_REQUEST["enviar"])) {//Código que se ejecuta cuando se envía el formulario

            // Validamos los datos del formulario
            $aErrores['nombre_apellidos']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre_apellidos'],100,0,1,);
            $aErrores['fecha_nacimiento']= validacionFormularios::validarFecha($_REQUEST['fecha_nacimiento'],'01/01/2200','01/01/1900',1);
            // $aErrores['sentimiento'] = $_REQUEST['sentimiento'];
            $aErrores['puntuacion_curso']= validacionFormularios::comprobarEntero($_REQUEST['puntuacion_curso'],PHP_INT_MAX,-PHP_INT_MAX,1);
            $aErrores['vacaciones'] = validacionFormularios::comprobarNoVacio($_REQUEST['vacaciones']);
            $aErrores['estado_animo'] = validacionFormularios::comprobarNoVacio($_REQUEST['estado_animo']);

            
            foreach($aErrores as $campo => $valor){
                if(!empty($valor)){ // Comprobar si el valor es válido
                    $entradaOK = false;
                } 
            }
            
        } else {//Código que se ejecuta antes de rellenar el formulario
            $entradaOK = false;
        }
        
        //Tratamiento del formulario
        if($entradaOK){ //Cargar la variable $aRespuestas y tratamiento de datos OK
            
            // Recuperar los valores del formulario
            $aRespuestas['nombre_apellidos'] = $_REQUEST['nombre_apellidos'];
            $aRespuestas['fecha_nacimiento'] = $_REQUEST['fecha_nacimiento'];
            $aRespuestas['sentimiento'] = $_REQUEST['sentimiento'];
            $aRespuestas['puntuacion_curso'] = $_REQUEST['puntuacion_curso'];
            $aRespuestas['vacaciones'] = $_REQUEST['vacaciones'];
            $aRespuestas['estado_animo'] = $_REQUEST['estado_animo'];
            
            // Calculo de la edad restando a la fecha actual la fecha de nacimiento
            $ofechaActual = new DateTime();
            $oFechaNacimento = new DateTime($aRespuestas['fecha_nacimiento']);
            $oDiferenciaFechas = $ofechaActual->diff($oFechaNacimento);

            // Repuesta con texto largo
            echo '<div class="contenedor">';
            echo '<h2>RESULTADOS DE LA ENCUESTA - INFORME DE SATISFACCIÓN PERSONAL</h2>';
            echo '<div class="logo"><img src="../webroot/media/images/resultado.png" alt="logo"></div>';
            echo '<div class="respuesta-contenedor">';
            echo "<p>Hoy <span class='respuesta'>".$ofechaActual->format("l, d F Y")."</span>  a las <span class='respuesta'>".$ofechaActual->format("H:i")."</span>  .</p>";
            echo "<p>D. <span class='respuesta'>".$aRespuestas['nombre_apellidos']."</span> nacido hace <span class='respuesta'>".$oDiferenciaFechas->y."</span>  años se siente <span class='respuesta'>".$aRespuestas['sentimiento']."</span> .</p>";
            echo "<p>Valora su curso actual con <span class='respuesta'>".$aRespuestas['puntuacion_curso']."</span>  sobre 10.</p>";
            echo "<p>Estas navidades las dedicará a <span class='respuesta'>".$aRespuestas['vacaciones']."</span> .</p>";
            echo "<p>Y, además, opina que:</p>";
            echo "<p><pre><span class='respuesta'>".$aRespuestas['estado_animo']."</span></pre> </p>";
            echo '</div>';
            echo '</div>';
            
        } else { //Mostrar el formulario hasta que lo rellenemos correctamente
            //Mostrar formulario
            //Mostrar los datos tecleados correctamente en intentos anteriores
            //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
            ?>
                <div class="contenedor">
                    <h1>ENCUESTA INDIVIDUAL DE VALORACIÓN - EJERCICIO 27</h1>
                    <h2>UTILIZANDO PLANTILLA DE DESARROLLO DE FORMULARIOS COMO CHURROS</h2>
                    
                    <div class="logo">
                        <img src="../webroot/media/images/encuesta.png" alt="logo">
                    </div>

                    <form action="#" method="POST" class="formulario">
                        <div class="campo">
                            <label for="nombre_apellidos">Nombre y apellidos del alumno: <span class="obligatorio">(*<?php echo $aErrores['nombre_apellidos']??'' ?>)</span></label>
                            <input type="text" id="nombre_apellidos" name="nombre_apellidos" value="<?php echo $_REQUEST['nombre_apellidos']??'' ?>">
                        </div>

                        <div class="campo">
                            <label for="fecha_nacimiento">Fecha de nacimiento: <span class="obligatorio">(*<?php echo $aErrores['fecha_nacimiento']??'' ?>)</span></label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $_REQUEST['fecha_nacimiento']??'' ?>">
                        </div>

                        <div class="campo">
                            <label>¿Cómo te sientes hoy? <span class="obligatorio">(* y una única selección permitida)</span> </label>
                            <div class="opciones-radio">
                                <label>MUY MAL</label><input type="radio" name="sentimiento" value="MUY MAL" <?php echo $_REQUEST['sentimiento']=="MUY MAL"?'checked':'' ?>>
                                <label>MAL</label><input type="radio" name="sentimiento" value="MAL" <?php echo $_REQUEST['sentimiento']=="MAL"?'checked':'' ?>>
                                <label>REGULAR</label><input type="radio" name="sentimiento" value="REGULAR" <?php echo $_REQUEST['sentimiento']=="REGULAR"?'checked':'' ?>>
                                <label>BIEN</label><input type="radio" name="sentimiento" value="BIEN" <?php echo $_REQUEST['sentimiento']=="BIEN"?'checked':'' ?>>
                                <label>MUY BIEN</label><input type="radio" name="sentimiento" value="MUY BIEN" <?php echo $_REQUEST['sentimiento']=="MUY BIEN"?'checked':'' ?>>
                            </div>
                        </div>

                        <div class="campo">
                            <label for="puntuacion_curso">¿Cómo va el curso? [0-10]: <span class="obligatorio">(* y entero)<?php echo $aErrores['puntuacion_curso']??'' ?></span></label>
                            <input type="number" id="puntuacion_curso" name="puntuacion_curso" min="0" max="10" value="<?php echo $_REQUEST['puntuacion_curso']??'' ?>">
                        </div>

                        <div class="campo">
                            <label for="vacaciones">¿Cómo se presentan las vacaciones de navidad? <span class="obligatorio">(* Cuadro de lista con los siguientes valores posibles: Ni idea, Con la familia, De fiesta, Trabajando, Estudiando DWES)<?php echo $aErrores['vacaciones']??'' ?></span></label>
                            <select id="vacaciones" name="vacaciones">
                                <option value="" disabled selected hidden></option> 
                                <option value="Ni idea" <?php echo $_REQUEST['vacaciones']=="Ni idea"?'selected':'' ?>>Ni idea</option>
                                <option value="Con la familia" <?php echo $_REQUEST['vacaciones']=="Con la familia"?'selected':'' ?>>Con la familia</option>
                                <option value="De fiesta" <?php echo $_REQUEST['vacaciones']=="De fiesta"?'selected':'' ?>>De fiesta</option>
                                <option value="Trabajando" <?php echo $_REQUEST['vacaciones']=="Trabajando"?'selected':'' ?>>Trabajando</option>
                                <option value="Estudiando DWES" <?php echo $_REQUEST['vacaciones']=="Estudiando DWES"?'selected':'' ?>>Estudiando DWES</option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="estado_animo">Describe brevemente tu estado de ánimo: <span class="obligatorio">(* y área de texto para varias líneas)<?php echo $aErrores['estado_animo']??'' ?></span></label>
                            <textarea id="estado_animo" name="estado_animo" rows="3"><?php echo $_REQUEST['estado_animo']??'' ?></textarea>
                        </div>

                        <div class="boton-contenedor">
                            <button type="submit" class="enviar" name="enviar">ENVIAR</button>
                        </div>
                    </form>
                </div>

            <?php

        }
       ?>
       
    </main>
</body>
</html>