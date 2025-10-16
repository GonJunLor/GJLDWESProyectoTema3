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
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 01</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 09/10/2025
        * 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).
        */
       $texto = "Hola";
       $entero = 100;
       $decimal = 1.1;
       $booleano = false;
       $aDatos = [$texto,$entero,$decimal,$booleano];
       
       echo("<h3>Uso de echo</h3>");
       echo('La variable $texto es de tipo '.gettype($texto).' y tiene el valor '.$texto.'<br>');
       echo('La variable $entero es de tipo '.gettype($entero).' y tiene el valor '.$entero.'<br>');
       echo('La variable $decimal es de tipo '.gettype($decimal).' y tiene el valor '.$decimal.'<br>');
       echo('La variable $booleano es de tipo '.gettype($booleano).' y tiene el valor '.($booleano?"true":"false").'<br>');
       
       print("<h3>Uso de print</h3>");
       print('La variable $texto es de tipo '.gettype($texto).' y tiene el valor '.$texto.'<br>');
       print('La variable $entero es de tipo '.gettype($entero).' y tiene el valor '.$entero.'<br>');
       print('La variable $decimal es de tipo '.gettype($decimal).' y tiene el valor '.$decimal.'<br>');
       print('La variable $booleano es de tipo '.gettype($booleano).' y tiene el valor '.($booleano?"true":"false").'<br>');
       
       printf("<h3>Uso de printf</h3>");
       printf("La variable %s es de tipo %s y tiene el valor %s <br>", '$texto', gettype($texto), $texto);
       printf("La variable %s es de tipo %s y tiene el valor %d <br>", '$entero', gettype($entero), $entero);
       printf("La variable %s es de tipo %s y tiene el valor %.2f <br>", '$decimal', gettype($decimal), $decimal);
       printf("La variable %s es de tipo %s y tiene el valor %s <br>", '$booleano', gettype($booleano), ($booleano?"true":"false"));
       
       print_r("<h3>Uso de print_r</h3>");
       print_r($aDatos,false);
       echo("<br>");
       print_r($aDatos,true);
       echo("<br>");
       print_r('La variable $texto es de tipo '.gettype($texto).' y tiene el valor '.$texto.'<br>');
       print_r('La variable $entero es de tipo '.gettype($entero).' y tiene el valor '.$entero.'<br>');
       print_r('La variable $decimal es de tipo '.gettype($decimal).' y tiene el valor '.$decimal.'<br>');
       print_r('La variable $booleano es de tipo '.gettype($booleano).' y tiene el valor '.($booleano?"true":"false").'<br>');
       
       echo("<h3>Uso de var_dump</h3>");
       var_dump($texto);echo("<br>");
       var_dump($entero);echo("<br>");
       var_dump($decimal);echo("<br>");
       var_dump($booleano);echo("<br>");
       ?>
    </main>
</body>
</html>