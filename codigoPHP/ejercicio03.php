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
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 03</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 09/10/2025
        * 3.Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)
        */
       //setlocale("Europe/Madrid");
       date_default_timezone_set('Europe/Madrid');
       // Establecer el locale (idioma) en español
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
        $ofecha = new DateTime();
        
        echo "<h3>Diagnóstico de setlocale:</h3>";
        // Esta línea te dirá qué locale PHP realmente cargó
        $locale_cargado = setlocale(LC_TIME, 0); 
        echo "El locale cargado es: <span>" . $locale_cargado . "</span><br>";

        // Esta línea te mostrará la fecha con el locale cargado
        echo "Fecha de prueba: <span>" . strftime("%A, %d de %B de %Y") . "</span>";

        echo "<h3>Fecha y hora con formato personalizado</h3>";
        echo (($ofecha->format("Y-m-d H:i:s"))."<br>");
        echo ($ofecha->format("l, d F Y")."<br>");
        echo ($ofecha->format("D, d M Y")."<br>");
        echo ("¿Es año bisiesto? (1=Si, 0=No): ".($ofecha->format("L"))."<br>");
        echo ($ofecha->format("H:i:s")."<br>");
        echo ($ofecha->format("h:i A")."<br>");
        echo ("Zona horaria: ".$ofecha->format("e")."<br>");
        /* 
        https://www.php.net/manual/es/datetime.format.php
        */

        echo('<h3>Usando el timestamp de DateTime y strftime, los dias y los meses están en español</h3> ');
        echo strftime("%A, %d de %B de %Y %H:%M:%S", $ofecha->getTimestamp());
        
        echo "<h3>Fecha y hora con formato pre-establecido</h3>";
        echo $ofecha->format(DateTimeInterface::RFC2822), "\n";
        echo $ofecha->format(DateTimeInterface::W3C);
       ?>
    </main>
</body>
</html>