<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 24</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 24/10/2025
        * 24.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la  misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
        */
        require_once "../core/231018libreriaValidacion.php"; // importamos nuestra libreria
       
        $entradaOK = true; //Variable que nos indica que todo va bien
        $aErrores = [  //Array donde recogemos los mensajes de error
            'nombre' => '', 
            'fecha_nacimiento'=>'',
            'codpostal' => '', 
            'telefono'=> '',
            'aceptarRgpd'=>''
        ];
        $aRespuestas=[ //Array donde recogeremos la respuestas correctas (si $entradaOK)
            'nombre' => '', 
            'fecha_nacimiento'=>'',
            'codpostal' => '', 
            'telefono'=> '',
            'aceptarRgpd'=>''
        ]; 
        
        //Para cada campo del formulario: Validar entrada y actuar en consecuencia
        if (isset($_REQUEST["enviar"])) {//Código que se ejecuta cuando se envía el formulario

            // Validamos los datos del formulario
            $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1,);
            $ofechaActual = new DateTime(); // creamos la fecha actual para pasarla al validarfecha
            $aErrores['fecha_nacimiento']= validacionFormularios::validarFecha($_REQUEST['fecha_nacimiento'],$ofechaActual->format('m/d/Y'));
            $aErrores['codpostal']= validacionFormularios::comprobarEntero($_REQUEST['codpostal']);
            $aErrores['telefono'] = validacionFormularios::validarTelefono($_REQUEST['telefono']);
            
            if(!empty($_REQUEST['telefono'])){ // Comprobar si el telefono está vacío
                foreach($aErrores as $campo => $valor){
                    if(!empty($valor)){ // Comprobar si el valor es válido
                        $entradaOK = false;
                    } 
                }
            }else{ //Construir mensajes de error
                $aErrores['telefono']='Introduce un teléfono';
                $entradaOK = false;
            }
            
        } else {//Código que se ejecuta antes de rellenar el formulario
            $entradaOK = false;
        }
        //Tratamiento del formulario
        if($entradaOK){ //Cargar la variable $aRespuestas y tratamiento de datos OK
            date_default_timezone_set('Europe/Madrid');
            setlocale(LC_TIME, 'es_ES.utf8');

            // Recuperar los valores del formulario
            $aRespuestas['nombre'] = $_REQUEST['nombre'];
            $ofechaNacimiento = new DateTime($_REQUEST['fecha_nacimiento']);
            $aRespuestas['fecha_nacimiento'] = strftime("%A, %d de %B de %Y", $ofechaNacimiento->getTimestamp());
            $aRespuestas['codpostal'] = $_REQUEST['codpostal'];
            $aRespuestas['telefono'] = $_REQUEST['telefono'];
            $aRespuestas['aceptarRgpd'] = $_REQUEST['aceptarRgpd']?'SI':'NO';
            
            echo "<h2>Resultados:</h2>";
            foreach ($aRespuestas as $campo => $valor) {
                echo "<p>$campo: <b>$valor</b></p>";
            }

            // Botón para volver a recargar el formulario inicial
            echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';
            
        } else { //Mostrar el formulario hasta que lo rellenemos correctamente
            //Mostrar formulario
            //Mostrar los datos tecleados correctamente en intentos anteriores
            //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
            ?>
                <h2>DATOS PERSONALES</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
                    <label for="tipoUsuario">Tipo usuario:</label>
                    <input type="text" id="tipoUsuario" name="tipoUsuario" value="Administrador" readonly>
                    <br>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $_REQUEST['nombre']??'' ?>">
                    <span class="error"><?php echo $aErrores['nombre'] ?></span>
                    <br>
                    <label for="fecha_nacimiento">Fecha de nacimiento: </label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $_REQUEST['fecha_nacimiento']??'' ?>">
                    <span class="error"><?php echo $aErrores['fecha_nacimiento']??'' ?></span>
                    <br>
                    <label for="codpostal">Codigo Postal:</label>
                    <input type="number" name="codpostal" value="<?php echo $_REQUEST['codpostal']??'' ?>">
                    <br>
                    <label for="telefono">Telefono:</label> 
                    <input type="text" id="telefono" name="telefono" value="<?php echo $_REQUEST['telefono']??'' ?>">
                    <span class="error"><?php echo $aErrores['telefono'] ?></span>
                    <br>
                    <label for="aceptarRgpd">¿Aceptas el RGPD?:</label> 
                    <input type="checkbox" name="aceptarRgpd" id="aceptarRgpd">
                    <br>                    
                    <input type="submit" value="Enviar" name="enviar">
                </form>

            <?php

        }
       ?>
       
    </main>
</body>
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        #telefono, #nombre {
            background-color: lightgoldenrodyellow;
        }
        main{
            width:600px;
            height: 450px;
            margin: auto;
            background-color: #eeeeee;
            border: 2px solid lightgray;
            border-radius: 20px;
            margin-top: 20px;
            padding: 10px;
        }
        main h2{
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            margin: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #335d7fff;
        }
        main p{margin:10px 20px;}
        form *{
            margin-top: 10px; 
        }
        label{
            font-family: 'Times New Roman', Times, serif;
            display: inline-block;
            width: 120px;
            margin-left: 20px;
            font-size: 1.2rem;
        }
        label[for="aceptarRgpd"]{width: 200px;}
        label[for="fecha_nacimiento"]{width: 170px;}
        .aviso{
            font-size: 0.75rem;
            margin-left: 20px;
        }
        input{
            padding: 5px 10px;
            margin-top: 20px;
            margin-right: 5px;
            font-size: 1.2rem;
            border-radius: 5px;
            font-family: 'Times New Roman', Times, serif;
            border: 0px solid grey;
        }
        input[readonly]{
            background-color: #d3d3d3ff;
            color: #6e6e6eff;
        }
        input[type="date"]{width: 190px;}
        input[type="checkbox"]{
            width: 20px;
            height: 18px;
        }
        input[name="enviar"], button{
            padding: 10px 25px;
            font-size: 1.2rem;
            margin: 20px 120px;
            border-radius: 20px;
            background-color: #4988bbff;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            border: 0px solid #252525ff;
        }
        .error{
            font-family: 'Times New Roman', Times, serif;
            color: red;
            font-size: 0.9rem;
        }
    </style>
</head>
</html>