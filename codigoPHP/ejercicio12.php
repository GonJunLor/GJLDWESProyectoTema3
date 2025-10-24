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
        <style>
            table{
                border-collapse: collapse;
            }
            th{
                background-color: gainsboro;
                border: 1px solid black;
                padding: 3px;
            }
            td{
                border: 1px solid black;
                padding: 3px;
            }
            h3{
                text-align: center;
                margin: 10px;
            }
        </style>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 24/10/2025
        * 12.Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
        */
        // Primero $_server con for each y luego session, cookie, request
        
        //Contenido de la variable $_SERVER-----------------------------------------------
        echo '<h3>Contenido de la variable $_SERVER</h3>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_SERVER)) {
            foreach ($_SERVER as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_SERVER[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_SESSION-------------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_SESSION</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_SESSION)) {
            foreach ($_SESSION as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_SESSION[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_COOKIE---------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_COOKIE</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_COOKIE)) {
            foreach ($_COOKIE as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_COOKIE[' . $variable . ']</td>';
                echo "<td><pre>" . $resultado . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_COOKIE está vacía.</em></td></tr>";
        }
        echo "</table>";

         //Contenido de la variable $_REQUEST--------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_REQUEST</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_REQUEST)) {
            foreach ($_REQUEST as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_REQUEST[' . $variable . ']</td>';
                echo "<td><pre>" . $resultado . "</pre></td>";
                echo "</tr><br><br>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_REQUEST está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_GET-------------------------------------
        echo '<br><br><h3>Contenido de la variable $_GET</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_GET)) {
            foreach ($_GET as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_GET[' . $variable . ']</td>';
                echo "<td><pre>" . $resultado . "</pre></td>";
                echo "</tr><br><br>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_GET está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_POST-----------------------------------------
        echo '<br><br><h3>Contenido de la variable $_POST</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_POST)) {
            foreach ($_POST as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_POST[' . $variable . ']</td>';
                echo "<td><pre>" . $resultado . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_POST está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_FILES-------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_FILES</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_FILES)) {
            foreach ($_FILES as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_FILES[' . $variable . ']</td>';
                echo "<td><pre>" . $resultado . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_FILES está vacía.</em></td></tr>";
        }
        echo "</table>";


        //Contenido de la variable $_ENV-----------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_ENV</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_ENV)) {
            foreach ($_ENV as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_ENV[' . $variable . ']</td>';
                echo "<td><pre>" . $resultado . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_ENV está vacía.</em></td></tr>";
        }
        echo "</table><br><br>";

        echo '<h3>Usando print_r para la variable $_SERVER</h3>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_SERVER)) {
            foreach ($_SERVER as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_SERVER[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
        }
        echo "</table>";
        print_r($_SERVER);
        
        echo '<h3>Usando var_dump para la variable $_SERVER</h3>';
        var_dump($_SERVER);
       ?>
    </main>
</body>
</html>