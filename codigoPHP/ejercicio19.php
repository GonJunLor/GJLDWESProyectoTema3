<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 19</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 19/10/2025
        * 19.Construir una librería de funciones de validación de campos de formularios (LibreríaValidacionFormularios.php) para utilizarla en los siguientes ejercicios. Discusión: diferencia entre librería de funciones y clase.
        */
        require_once "../core/231018libreriaValidacion.php"; // Importar y usar la libreria 231018libreriaValidacion.php

        echo "<h3>Prueba libreria con validar email (correcto no devuelve nada)</h3>";
        echo "<p>Email gonzalo: ". validacionFormularios::validarEmail('gonzalo') ."</p>";
        echo "<p>Email gonzalo@mail.es: ". validacionFormularios::validarEmail('gonzalo@mail.es') ."</p>";
        echo "<p>Email gonzalo@hotmail.com: ". validacionFormularios::validarEmail('gonzalo@hotmail.com') ."</p>";

        echo "<h3>Prueba libreria con validar DNI  (correcto no devuelve nada)</h3>";
        echo "<p>12345678Z: ". validacionFormularios::validarDni('12345678Z') ."</p>";
        echo "<p>12365478J: ". validacionFormularios::validarDni('12365478J') ."</p>";
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