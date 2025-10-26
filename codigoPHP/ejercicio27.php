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

    .campo label, .campo p {
        font-weight: bold;
        color: #333;
        display: block;
        margin-bottom: 5px;
    }

    .obligatorio {
        color: red;
    }

    /* Estilo general para inputs y selects */
    input[type="text"], 
    input[type="date"], 
    input[type="number"], 
    textarea, 
    select {
        border: 1px solid #000;
        padding: 5px;
        box-sizing: border-box;
        background-color: #FFFFE0;
    }

    /* Estilos específicos para campos largos */
    .input-largo {
        width: 80%;
        max-width: 500px; 
    }

    /* Estilos para campos de fecha y puntuación */
    .input-fecha {
        width: 150px;
    }

    .input-puntuacion {
        width: 50px;
        text-align: center;
    }

    /* Estilo para el campo de selección (Dropdown) */
    .select-vacaciones {
        width: 350px; /* Ancho ajustable */
        appearance: none; /* Oculta el estilo nativo para mayor control */
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"><polygon points="0,0 10,0 5,10" style="fill:black;"/></svg>'); /* Flecha negra */
        background-repeat: no-repeat;
        background-position: right 5px center;
        padding-right: 20px; /* Espacio para la flecha */
    }

    /* Estilo para el área de texto */
    .textarea-animo {
        width: 100%;
        resize: vertical; /* Permite redimensionar solo verticalmente */
    }

    /* Estilos para los Radio Buttons (Cómo te sientes hoy) */
    .opciones-radio {
        display: grid;
        grid-template-columns: auto 30px; /* Columna para el texto y columna pequeña para el radio */
        gap: 5px;
        max-width: 150px; /* Para agruparlos */
        align-items: center;
    }

    .opciones-radio label {
        font-weight: normal; /* El texto de la opción no es negrita */
        display: inline;
    }

    .opciones-radio input[type="radio"] {
        /* Estilo para simular el aspecto de cuadro con borde grueso */
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 20px; 
        height: 20px;
        border: 2px solid black; /* Borde negro grueso */
        border-radius: 3px; /* Esquinas ligeramente redondeadas */
        outline: none;
        cursor: pointer;
        background-color: transparent;
    }

    .opciones-radio input[type="radio"]:checked {
        /* Relleno con un punto para simular la selección, si se desea */
        background-color: #888; 
        /* Si quieres el punto blanco dentro, podrías usar un ::after o una imagen de fondo más elaborada */
    }

    /* Botón de ENVIAR */
    .boton-container {
        text-align: center;
        margin-top: 30px;
    }

    .boton-enviar {
        padding: 8px 30px;
        background-color: #ccc; /* Fondo gris */
        border: 2px solid #666; /* Borde gris más oscuro */
        color: #333;
        font-size: 1em;
        cursor: pointer;
        border-radius: 3px;
        box-shadow: 1px 1px 2px #888; /* Sombra sutil para el efecto de relieve */
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
        
       ?>
       <div class="container">
        <h1>ENCUESTA INDIVIDUAL DE VALORACIÓN – EJERCICIO 27</h1>
        <h2>UTILIZANDO PLANTILLA DE DESARROLLO DE FORMULARIOS COMO CHURROS</h2>
        
        <div class="logo">
            <img src="../webroot/media/images/ies2.png" alt="logo">
        </div>

        <form action="#" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre_alumno">Nombre y apellidos del alumno: (<span class="obligatorio">*</span>)</label>
                <input type="text" id="nombre_alumno" name="nombre_alumno" required class="input-largo">
            </div>

            <div class="campo">
                <label for="fecha_nacimiento">Fecha de nacimiento: (<span class="obligatorio">*</span>)</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required class="input-fecha">
            </div>

            <div class="campo">
                <p>¿Cómo te sientes hoy? (<span class="obligatorio">*</span> y una única selección permitida)</p>
                <div class="opciones-radio">
                    <label>MUY MAL</label><input type="radio" name="sentimiento" value="MUY MAL" required>
                    <label>MAL</label><input type="radio" name="sentimiento" value="MAL">
                    <label>REGULAR</label><input type="radio" name="sentimiento" value="REGULAR">
                    <label>BIEN</label><input type="radio" name="sentimiento" value="BIEN">
                    <label>MUY BIEN</label><input type="radio" name="sentimiento" value="MUY BIEN">
                </div>
            </div>

            <div class="campo">
                <label for="puntuacion_curso">¿Cómo va el curso? [0-10]: (<span class="obligatorio">*</span> y entero)</label>
                <input type="number" id="puntuacion_curso" name="puntuacion_curso" min="0" max="10" required class="input-puntuacion">
            </div>

            <div class="campo">
                <label for="vacaciones">¿Cómo se presentan las vacaciones de navidad? (<span class="obligatorio">*</span> Cuadro de lista con los siguientes valores posibles: Ni idea, Con la familia, De fiesta, Trabajando, Estudiando DWES)</label>
                <select id="vacaciones" name="vacaciones" required class="select-vacaciones">
                    <option value="" disabled selected hidden></option> <option value="Ni idea">Ni idea</option>
                    <option value="Con la familia">Con la familia</option>
                    <option value="De fiesta">De fiesta</option>
                    <option value="Trabajando">Trabajando</option>
                    <option value="Estudiando DWES">Estudiando DWES</option>
                </select>
            </div>

            <div class="campo">
                <label for="estado_animo">Describe brevemente tu estado de ánimo: (<span class="obligatorio">*</span> y área de texto para varias líneas)</label>
                <textarea id="estado_animo" name="estado_animo" rows="3" required class="textarea-animo"></textarea>
            </div>

            <div class="boton-container">
                <button type="submit" class="boton-enviar">ENVIAR</button>
            </div>
        </form>
    </div>
    </main>
</body>
</html>