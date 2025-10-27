<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 22</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 19/10/2025
        * 22.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.
        */
       // Comprobar si se ha enviado el formulario (al menos el campo 'nombre')
        
       if (isset($_REQUEST["nombre"])) {//Código que se ejecuta cuando se envía el formulario
            
            // Usar htmlspecialchars para prevenir ataques XSS al mostrar la entrada del usuario
            $nombre = $_REQUEST["nombre"];
            $edad = $_REQUEST["edad"];
            
            echo "<h2>Resultados:</h2>";
            echo "<p>Nombre: <strong>" . $nombre . "</strong></p>";
            echo "<p>Edad: <strong>" . $edad . "</strong></p>";

            // Botón para volver a recargar el formulario inicial
            echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';
            
        } else {//Código que se ejecuta antes de rellenar el formulario
            ?>
            
            <form action="" method="post"> 
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="edad">Edad:</label>
                <input type="number" name="edad">
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
    </style>
</head>
</html>