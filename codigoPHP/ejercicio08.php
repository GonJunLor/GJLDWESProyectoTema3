<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        main{
            margin: 20px 20px 20px 100px;
        }
        h3{
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 08</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 15/10/2025
        * 8.Mostrar la dirección IP del equipo desde el que estás accediendo.
        */
        echo "<h3>Ip del cliente</h3>";
        echo "<b>IP del equipo actual:</b> " . $_SERVER['REMOTE_ADDR'] . "<br>";
        echo "<h3>Ip del servidor</h3>";
        echo "<b>IP del equipo actual:</b> " . $_SERVER['SERVER_ADDR'] . "<br>";
       ?>
    </main>
</body>
</html>