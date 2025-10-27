<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 23</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 24/10/2025
        * 23.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
        */
       require_once "../core/231018libreriaValidacion.php"; // importamos nuestra libreria
       
        $entradaOK = true; //Variable que nos indica que todo va bien
        $aErrores = [  //Array donde recogemos los mensajes de error
            'nombre' => '', 
            'edad' => '', 
            'telefono'=> ''
        ];
        $aRespuestas=[ //Array donde recogeremos la respuestas correctas (si $entradaOK)
            'nombre' => '', 
            'edad' => '', 
            'telefono'=> ''
        ]; 
        
        //Para cada campo del formulario: Validar entrada y actuar en consecuencia
        if (isset($_REQUEST["enviar"])) {//Código que se ejecuta cuando se envía el formulario

            // Validamos los datos del formulario
            $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1,);
            $aErrores['edad']= validacionFormularios::comprobarEntero($_REQUEST['edad']);
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
            
            // Recuperar los valores del formulario
            $aRespuestas['nombre'] = $_REQUEST['nombre'];
            $aRespuestas['edad'] = $_REQUEST['edad'];
            $aRespuestas['telefono'] = $_REQUEST['telefono'];
            
            echo "<h2>Resultados:</h2>";
            foreach ($aRespuestas as $campo => $valor) {
                echo "<p>$campo: <b>$valor</b></p>";
            }

            // Botón para volver a recargar el formulario inicial
            echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';
            
        } else { //Mostrar el formulario hasta que lo rellenemos correctamente
            //Mostrar los datos tecleados correctamente en intentos anteriores
            //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
            ?>
                <h2>Datos personales</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><span class="error">*<?php echo $aErrores['nombre'] ?></span>
                    <br>
                    <label for="edad">Edad:</label>
                    <input type="number" name="edad">
                    <br>
                    <label for="telefono">Telefono:</label> 
                    <input type="text" id="telefono" name="telefono"><span class="error">*<?php echo $aErrores['telefono'] ?></span>
                    <br>
                    <input type="submit" value="Enviar" name="enviar">
                    <p class="aviso">*Campos obligatorios</p>
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
        input[name="enviar"], button{
            padding: 5px 15px;
            margin: 10px 50px;
            border-radius: 20px;
            background-color: rgb(73, 136, 187);
            color: white;
        }
        .error{color: red;}
    </style>
</head>
</html>