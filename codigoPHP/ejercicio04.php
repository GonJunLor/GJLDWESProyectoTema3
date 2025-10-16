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
       setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');
       date_default_timezone_set('Europe/Lisbon');
       $ofecha = new DateTime();
       echo "<h3>Fecha y hora en Oporto: </h3>";
       echo $ofecha->format("d/m/Y - H:i")."<br>";
       echo $ofecha->format("d \d\\e F \d\\e Y  - H:i")."<br>";

       echo "<p>No puedo poner el mes en portugúes de momento (ver código)</p>"

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