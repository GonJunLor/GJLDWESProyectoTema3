<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        .container {
            
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        /* Títulos */
        h1 {
            color: #4CAF50;
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 5px;
        }

        h2 {
            color: #4CAF50;
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
            width: 80%;
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
        .boton-container {
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
            $aErrores['fecha_nacimiento']= validacionFormularios::validarFecha($_REQUEST['fecha_nacimiento']);
            // $aErrores['sentimiento'] = $_REQUEST['sentimiento'];
            $aErrores['puntuacion_curso']= validacionFormularios::comprobarEntero($_REQUEST['puntuacion_curso']);
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
            
            // Repuesta con texto largo
            // RESULTADOS DE LA ENCUESTA – INFORME DE SATISFACCIÓN PERSONAL
            // Imagen
            /* Hoy (fechaActualConDiaDeLaSemanaYNombreMes) a las (hora actual HH:MM) .
D. (nombreYApellidos) nacido hace (añosDeEdad) años se siente (comoSeSiente).
Valora su curso actual con (valoración) sobre 10.
Estas navidades las dedicará a (dedicaciónNavideña).
Y, además, opina que:
(Opinión de varias lineas) */
            echo "<h2>Resultados:</h2>";
            foreach ($aRespuestas as $campo => $valor) {
                echo "<p>$campo: <b>$valor</b></p>";
            }
            
        } else { //Mostrar el formulario hasta que lo rellenemos correctamente
            //Mostrar formulario
            //Mostrar los datos tecleados correctamente en intentos anteriores
            //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
            ?>
                <div class="container">
                    <h1>ENCUESTA INDIVIDUAL DE VALORACIÓN – EJERCICIO 27</h1>
                    <h2>UTILIZANDO PLANTILLA DE DESARROLLO DE FORMULARIOS COMO CHURROS</h2>
                    
                    <div class="logo">
                        <img src="../webroot/media/images/ies2.png" alt="logo">
                    </div>

                    <form action="#" method="POST" class="formulario">
                        <div class="campo">
                            <label for="nombre_apellidos">Nombre y apellidos del alumno: <span class="obligatorio">(*)</span></label>
                            <input type="text" id="nombre_apellidos" name="nombre_apellidos">
                        </div>

                        <div class="campo">
                            <label for="fecha_nacimiento">Fecha de nacimiento: <span class="obligatorio">(*)</span></label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
                        </div>

                        <div class="campo">
                            <label>¿Cómo te sientes hoy? <span class="obligatorio">(* y una única selección permitida)</span> </label>
                            <div class="opciones-radio">
                                <label>MUY MAL</label><input type="radio" name="sentimiento" value="MUY MAL">
                                <label>MAL</label><input type="radio" name="sentimiento" value="MAL">
                                <label>REGULAR</label><input type="radio" name="sentimiento" value="REGULAR">
                                <label>BIEN</label><input type="radio" name="sentimiento" value="BIEN">
                                <label>MUY BIEN</label><input type="radio" name="sentimiento" value="MUY BIEN">
                            </div>
                        </div>

                        <div class="campo">
                            <label for="puntuacion_curso">¿Cómo va el curso? [0-10]: <span class="obligatorio">(* y entero)</span></label>
                            <input type="number" id="puntuacion_curso" name="puntuacion_curso" min="0" max="10">
                        </div>

                        <div class="campo">
                            <label for="vacaciones">¿Cómo se presentan las vacaciones de navidad? <span class="obligatorio">(* Cuadro de lista con los siguientes valores posibles: Ni idea, Con la familia, De fiesta, Trabajando, Estudiando DWES)</span></label>
                            <select id="vacaciones" name="vacaciones">
                                <option value="" disabled selected hidden></option> <option value="Ni idea">Ni idea</option>
                                <option value="Con la familia">Con la familia</option>
                                <option value="De fiesta">De fiesta</option>
                                <option value="Trabajando">Trabajando</option>
                                <option value="Estudiando DWES">Estudiando DWES</option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="estado_animo">Describe brevemente tu estado de ánimo: <span class="obligatorio">(* y área de texto para varias líneas)</span></label>
                            <textarea id="estado_animo" name="estado_animo" rows="3"></textarea>
                        </div>

                        <div class="boton-container">
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