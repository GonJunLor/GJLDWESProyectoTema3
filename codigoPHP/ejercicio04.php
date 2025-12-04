<!DOCTYPE html>
<html lang="pt">
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
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 04</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 27/10/2025
        * 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
        */
        date_default_timezone_set('Europe/Lisbon');
        $ofecha = new DateTime();
        setlocale(LC_TIME, 'pt_PT.utf8');

        echo("<h3>Fecha y hora actual en idioma por defecto por usar el método format().</h3>");
        echo '<p>'.$ofecha->format("l, d F Y H:i:s").'</p>';
        //info para el parametro format : https://www.php.net/manual/es/datetime.format.php

        echo("<h3>Fecha y hora actual en Portugues con el método strftime().</h3>");
        echo strftime("%A, %d de %B de %Y %H:%M:%S", $ofecha->getTimestamp());

        /* Zonas horarias: 
            https://www.php.net/manual/es/timezones.php
        */
       ?>
    </main>
</body>
</html>