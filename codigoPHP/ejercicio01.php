<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        main{
            margin: 20px 20px 20px 20px;
        }
        h3{
            margin-top: 20px;
        }
        .negrita{
            font-weight: bold;
            font-size: 0.9em;
        }
        .tipo{
            color: green;
            font-weight: bold;
        }
        .valor{
            color: blue;
            font-weight: bold;
        }
    </style>
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
       echo('La variable <span class="negrita">$texto</span> es de tipo <span class="tipo">'.gettype($texto).'</span> y tiene el valor <span class="valor">'.$texto.'</span><br>');
       echo('La variable <span class="negrita">$entero</span> es de tipo <span class="tipo">'.gettype($entero).'</span> y tiene el valor <span class="valor">'.$entero.'</span><br>');
       echo('La variable <span class="negrita">$decimal</span> es de tipo <span class="tipo">'.gettype($decimal).'</span> y tiene el valor <span class="valor">'.$decimal.'</span><br>');
       echo('La variable <span class="negrita">$booleano</span> es de tipo <span class="tipo">'.gettype($booleano).'</span> y tiene el valor <span class="valor">'.($booleano?"true":"false").'</span><br>');
       
       print("<h3>Uso de print</h3>");
       print('La variable <span class="negrita">$texto</span> es de tipo <span class="tipo">'.gettype($texto).'</span> y tiene el valor <span class="valor">'.$texto.'</span><br>');
       print('La variable <span class="negrita">$entero</span> es de tipo <span class="tipo">'.gettype($entero).'</span> y tiene el valor <span class="valor">'.$entero.'</span><br>');
       print('La variable <span class="negrita">$decimal</span> es de tipo <span class="tipo">'.gettype($decimal).'</span> y tiene el valor <span class="valor">'.$decimal.'</span><br>');
       print('La variable <span class="negrita">$booleano</span> es de tipo <span class="tipo">'.gettype($booleano).'</span> y tiene el valor <span class="valor">'.($booleano?"true":"false").'</span><br>');
       
       printf("<h3>Uso de printf</h3>");
       printf("La variable <span class='negrita'>%s</span> es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%s</span> <br>", '$texto', gettype($texto), $texto);
       printf("La variable <span class='negrita'>%s</span> es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%d</span> <br>", '$entero',gettype($entero), $entero);
       printf("La variable <span class='negrita'>%s</span> es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%.2f</span> <br>", '$decimal', gettype($decimal), $decimal);
       printf("La variable <span class='negrita'>%s</span> es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%s</span> <br>", '$booleano', gettype($booleano), ($booleano?"true":"false"));
       
       print_r("<h3>Uso de print_r</h3>");
       print_r($aDatos,false);
       echo("<br>");
       print_r($aDatos,true);
       echo("<br>");
       print_r('La variable <span class="negrita">$texto</span>$texto</span> es de tipo <span class="tipo">'.gettype($texto).'</span> y tiene el valor <span class="valor">'.$texto.'</span><br>');
       print_r('La variable <span class="negrita">$texto</span>$entero</span> es de tipo <span class="tipo">'.gettype($entero).'</span> y tiene el valor <span class="valor">'.$entero.'</span><br>');
       print_r('La variable <span class="negrita">$texto</span>$decimal</span> es de tipo <span class="tipo">'.gettype($decimal).'</span> y tiene el valor <span class="valor">'.$decimal.'</span><br>');
       print_r('La variable <span class="negrita">$texto</span>$booleano</span> es de tipo <span class="tipo">'.gettype($booleano).'</span> y tiene el valor <span class="valor">'.($booleano?"true":"false").'</span><br>');
       
       echo("<h3>Uso de var_dump</h3>");
       var_dump($texto);echo("<br>");
       var_dump($entero);echo("<br>");
       var_dump($decimal);echo("<br>");
       var_dump($booleano);echo("<br>");
       ?>
    </main>
</body>
</html>