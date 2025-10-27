<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 14</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 19/10/2025
        * 14.Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. 
        * Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo 
        * y en el de explotación.
        */
        echo "<h3>Listado Completo de Extensiones Cargadas</h3>";

        echo "<pre>";
        print_r(get_loaded_extensions());
        echo "</pre>";

        // Diferentes formas de importar una libreria
        //include "231018libreriaValidacion.php";
        //include_once "231018libreriaValidacion.php";
        //require "231018libreriaValidacion.php";
        require_once "../core/231018libreriaValidacion.php";

        // Uso de la libreria en este caso con funciones estáticas
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