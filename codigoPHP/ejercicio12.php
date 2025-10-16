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
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 12</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 16/10/2025
        * 12.Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
        */
        
        echo '<h3>Usando foreach y echo para la variable $_GLOBAL</h3>';
        foreach ($GLOBALS as $clave => $valor) {
            echo $clave." = ".$valor."<br>";
        }
        echo '<h3>Usando print_r para la variable $_GLOBAL</h3>';
        print_r($GLOBALS);
        
        echo '<h3>Usando var_dump para la variable $_SERVER</h3>';
        var_dump($_SERVER);
        
        echo '<h3>Usando foreach y echo para la variable $_SERVER</h3>';
        foreach ($_SERVER as $clave => $valor) {
            echo $clave." = ".$valor."<br>";
        }
        

       ?>
    </main>
</body>
</html>