<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 06</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 15/10/2025
        * 6.Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
        */
        $ofechaHora = new DateTime();
        echo "<h3>Fecha actual</h3>";
        echo ($ofechaHora->format("Y-m-d H:i:s"))."<br>";

        echo "<h3>Fecha dentro de 60 días</h3>";
        $ofechaHora->modify("60 days"); // Método para añadir tiempo a una fecha
        echo $ofechaHora->format("Y-m-d H:i:s")
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
            margin: 20px 20px 20px 100px;
        }
        h3{
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
</html>