<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        #telefono {
            background-color: lightgoldenrodyellow;
        }
        main{
            width:500px;
            height: 300px;
            margin: auto;
            background-color: #eeeeee;
            border: 2px solid lightgray;
            border-radius: 20px;
            margin-top: 20px;
            padding: 10px;
        }
        main h2{
            text-align: center;
            margin: 10px;
        }
        form *{
            margin-top: 10px; 
        }
        label{
            display: inline-block;
            width: 80px;
            margin-left: 20px;
        }
        .aviso{font-size: 0.75em;}
        input[name="enviar"]{
            padding: 5px 15px;
            margin: 10px 50px;
            border-radius: 20px;
            background-color: rgb(73, 136, 187);
            color: white;
        }
    </style>
</head>
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
        * @since: 06/10/2025
        * 24.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la  misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
        */
        require_once "../core/231018libreriaValidacion.php"; // importamos nuestra libreria
       
        $entradaOK = true; //Variable que nos indica que todo va bien
        $aErrores = ['nombre' => '', 'edad' => '', 'telefono'=> '']; //Array donde recogemos los mensajes de error
        $aRespuestas=['nombre' => '', 'edad' => '', 'telefono'=> '']; //Array donde recogeremos la respuestas correctas (si $entradaOK)
        
        //Para cada campo del formulario: Validar entrada y actuar en consecuencia
        if (isset($_REQUEST["enviar"])) {//Código que se ejecuta cuando se envía el formulario

            // Recuperar los valores del formulario
            $aRespuestas['nombre'] = $_REQUEST["nombre"];
            $aRespuestas['edad'] = $_REQUEST["edad"];
            $aRespuestas['telefono'] = $_REQUEST["telefono"];
            
            // Validamos el telefono con nuestra librería
            $aErrores['telefono'] = validacionFormularios::validarTelefono($aRespuestas['telefono']);
            
            if(!empty($aRespuestas['telefono'])){ // Comprobar si el telefono está vacío
                if(empty($aErrores['telefono'])){ // Comprobar si el telefono es válido
                    $entradaOK = true;
                } else { //Construir mensajes de error
                    $entradaOK = false;
                }
            }else{ //Construir mensajes de error
                $aErrores['telefono']='Introduce un teléfono';
                $entradaOK = false;
            }
            
            //Limpiar campos malos
            
        } else {//Código que se ejecuta antes de rellenar el formulario
            $entradaOK = false;
        }
        //Tratamiento del formulario
        if($entradaOK){ //Cargar la variable $aRespuestas y tratamiento de datos OK
            echo "<h2>Resultados:</h2>";
            echo "<p>Nombre: <strong>" . $aRespuestas['nombre'] . "</strong></p>";
            echo "<p>Edad: <strong>" . $aRespuestas['edad'] . "</strong></p>";
            echo "<p>Teléfono: <strong>" . $aRespuestas['telefono'] . "</strong></p>";

            // Botón para volver a recargar el formulario inicial
            echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';
            
        } else { //Mostrar el formulario hasta que lo rellenemos correctamente
            //Mostrar formulario
            //Mostrar los datos tecleados correctamente en intentos anteriores
            //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
            ?>
                <h2>Datos personales</h2>
                <form action="" method="post"> 
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $aRespuestas['nombre'] ?>">
                    <br>
                    <label for="edad">Edad:</label>
                    <input type="number" name="edad" value="<?php echo $aRespuestas['edad'] ?>">
                    <br>
                    <label for="telefono">Telefono:</label> 
                    <input type="text" id="telefono" name="telefono" value="<?php echo $aRespuestas['telefono'] ?>"><span>*<?php echo $aErrores['telefono'] ?></span>
                    <br>
                    <input type="submit" value="Enviar" name="enviar">
                    <p class="aviso">*Campos obligatorios</p>
                </form>

            <?php

        }
       ?>
       
    </main>
</body>
</html>