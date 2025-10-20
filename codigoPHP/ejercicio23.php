<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        #telefonoObligatorio {
            background-color: lightgoldenrodyellow;
        }
    </style>
</head>
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
        * @since: 06/10/2025
        * 23.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
        */
       require_once "../core/231018libreriaValidacion.php"; // importamos nuestra libreria
       
        if (isset($_REQUEST["nombre"])) {//Código que se ejecuta cuando se envía el formulario
            
            // Recuperar los valores del formulario
            $nombre = $_REQUEST["nombre"];
            $edad = $_REQUEST["edad"];
            $telefono = $_REQUEST["telefono"];
            
            // Validamos el telefono con nuestra librería
            $validarTelefono = validacionFormularios::validarTelefono($telefono);
            
            if(empty($validarTelefono)&&!empty($telefono)){ // Comprobar si el telefono esta vacío es válido
                // Si es correcto mostramos la respuesta
                // Cambio el id a nombre obligatorio para poner el fondo amarillo
                echo "<h2>Resultados:</h2>";
                echo "<p>Nombre: <strong>" . $nombre . "</strong></p>";
                echo "<p>Edad: <strong>" . $edad . "</strong></p>";
                echo "<p>Teléfono: <strong>" . $telefono . "</strong></p>";

                // Botón para volver a recargar el formulario inicial
                echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';
                
            } else {// Si es incorrecto mostramos el formulario de nuevo con el campo telefono en amarillo y un mensaje
                ?>
                    <h2>Datos personales</h2>
                    <form action="" method="post"> 
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" >
                        <br>
                        <label for="edad">Edad:</label>
                        <input type="number" name="edad">
                        <br>
                        <label for="telefono">Telefono:</label> 
                        <input type="text" id="telefonoObligatorio" name="telefono"><span><?php echo empty($telefono)? "Introduce un teléfono": $validarTelefono ?></span>
                        <br>
                        <input type="submit" value="Enviar">
                    </form>

                <?php
            }


        } else {//Código que se ejecuta antes de rellenar el formulario
            ?>
            <h2>Datos personales</h2>
            <form action="" method="post"> 
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="edad">Edad:</label>
                <input type="number" name="edad">
                <br>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono">
                <br>
                <input type="submit" value="Enviar">
            </form>
            
        <?php
        }
       ?>
    </main>
</body>
</html>