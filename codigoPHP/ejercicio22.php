<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
</head>
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
        
       if (isset($_REQUEST["nombre"])) {
            echo "<h2>Resultados:</h2>";

            // Usar htmlspecialchars para prevenir ataques XSS al mostrar la entrada del usuario
            $nombre = htmlspecialchars($_REQUEST["nombre"]);
            $edad = htmlspecialchars($_REQUEST["edad"]);
            
            echo "<p>Nombre: <strong>" . $nombre . "</strong></p>";
            echo "<p>Edad: <strong>" . $edad . "</strong></p>";

            // Botón para volver a recargar el formulario inicial
            echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';

        } else {
            ?>
            
            <form action="" method="get"> 
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="edad">Edad:</label>
                <input type="number" name="edad">
                <br>
                <input type="submit" value="Enviar">
            </form>
            
        <?php
        }
        ?>
    </main>
</body>
</html>