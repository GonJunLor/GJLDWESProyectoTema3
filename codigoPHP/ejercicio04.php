<!DOCTYPE html>
<html lang="pt">
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
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 04</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 09/10/2025
        * 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
        */
       date_default_timezone_set('Europe/Lisbon');
       $ofecha = new DateTime();
       //setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');
       // Intenta esta línea en lugar de la que tienes actualmente
        setlocale(LC_TIME, 'pt_PT.utf8'); // <<<--- ESTA ES LA CORRECCIÓN
       
       echo "<h3>Diagnóstico de setlocale:</h3>";
        // Esta línea te dirá qué locale PHP realmente cargó
        $locale_cargado = setlocale(LC_TIME, 0); 
        echo "El locale cargado es: <span>" . $locale_cargado . "</span><br>";

        // Esta línea te mostrará la fecha con el locale cargado
        echo "Fecha de prueba: <span>" . strftime("%A, %d de %B de %Y") . "</span>";


       echo("<h3>Fecha y hora actual en Portugues.</h3><br>");
        // Mostrar el resultado
        echo( "<p>La fecha de hoy es :<span> " . $ofecha->format("l") . " " . $ofecha->format("d") . " de " . $ofecha->format("F") . " de " . $ofecha->format("o") . " y la hora es: " . $ofecha->format("H:i:s") . '</span></p>');
        //info para el parametro format : https://www.php.net/manual/es/datetime.format.php

        echo('<br><br><h3>Usando el timestamp de DateTime y strftime, los dias y los meses están en Portugues</h3><br> ');

        echo "La fecha de hoy es: <span>" . strftime("%A %d de %B de %Y", $ofecha->getTimestamp()) .
        " y la hora es: " . $ofecha->format("H:i:s") . '</span>';
       // No puedo usar IntlDateFormatter ya que el modulo intl no está habilitado en mi servidor
       /*
       $oFormateador = new IntlDateFormatter(
        "pt_PT", 
        IntlDateFormatter::NONE,
        IntlDateFormatter::NONE,
        "Europe/Lisbon", 
        IntlDateFormatter::GREGORIAN, 
        "d \d\e MMMM \d\e YYYY - HH:mm" // El patrón de formato deseado
       );
       echo $oFormateador->format($ofecha);
       */

       /* Zonas horarias: 
            https://www.php.net/manual/es/timezones.php
        Formateador de fechas:
            https://www.php.net/manual/es/class.intldateformatter.php
        */
       ?>
    </main>
</body>
</html>