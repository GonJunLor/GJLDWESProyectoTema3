<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 21</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
        <form action="tratamiento.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <br>
            <label for="edad">Edad:</label>
            <input type="number" name="edad">
            <br>
            <input type="submit" value="Enviar">
        </form>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 17/10/2025
        * 21.Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.
        */
        
       ?>
    </main>
</body>
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        form{
            margin: 30px;
        }
        input{
            margin-bottom: 5px;
        }
        label{
            width: 100px;
        }
    </style>
</head>
</html>