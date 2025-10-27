<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 05</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 15/10/2025
        * 5.Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
        */
        $oFecha = new DateTime();
        echo "<h3>Con clase DateTime()</h3>";
        echo "Timestamp en segundos: ". $oFecha->getTimestamp() ." <br>";
        echo "Timestamp en fecha y hora: ".$oFecha->format("Y-m-d H:i:s")."<br>";

        $timestamp = time();
        echo "<h3>Con función time()</h3>";
        echo "Timestamp en segundos: $timestamp <br>";
        echo "Timestamp en fecha y hora: ".date("Y-m-d H:i:s",$timestamp)." <br>";

        $ofechaActual = new DateTimeImmutable();
        echo "<h3>Con clase DateTimeImmutable</h3>";
        echo "Timestamp en segundos: ".$ofechaActual->getTimestamp()." <br>";
        echo "Timestamp en fecha y hora: ".$ofechaActual->format("Y-m-d H:i:s")." <br>";
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