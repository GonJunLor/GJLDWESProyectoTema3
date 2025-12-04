<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        :root {
            --colorFondo1: #ffffff;
            --colorFondo2: #f3f3f3;
            --colorFondo3: #bfc9cd;
            --colorFondo4: black;
        
            --colorBorde: #c5c5c5;
            --radioBorde: 6px;
            --anchoBorde: 1px;
        
            --colorTexto: #000000;
            --tamanoTexto: 16px;
            --fuenteTexto1: Sofia,sans-serif;
            --fuenteTexto2: Arial,sans-serif;

            --anchoArticulo: 18vw;
            --altoArticulo: 26vw;
            --altoSuperpuesto: 20vw;

            /* Combinación de dimensiones para el iframe, funciona al 50% */
            --anchoIframe:calc(var(--anchoArticulo)*3.3);
            --altoIframe:calc(var(--altoArticulo)*2.6);
            --zoomIframe:0.3;

            --imagenFondo: url(../media/images/codigo.jpg);
        }
        *{
            padding: 0;
            margin: 0;
            font-family: var(--fuenteTexto2);
        }
        #aviso{
            background-color: var(--colorFondo4);
            color: white;
            text-align: center;
            font-size: 0.7em;
            letter-spacing: 1px;
            padding: 10px;
        }
        nav{
            background-color: var(--colorFondo1);
            border-bottom: var(--colorBorde) solid var(--anchoBorde);
            padding: 5px 18px;
            position: sticky;
            top: 0;
            z-index: 2000;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        nav h2{
            color: #000000;
        }
    </style>
</head>
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 00</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 06/10/2025
        * 0. Hola mundo y phpinfo().
        */
        echo("Hola mundo");
        phpinfo();
       ?>
    </main>
</body>
</html>