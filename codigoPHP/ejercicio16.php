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
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 16</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 17/10/2025
        * 16.Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
        */
        $sueldoTotal=0;
        $aSueldoSemana=[
            "Lunes"=>50,
            "Martes"=>30,
            "Miercoles"=>45,
            "Jueves"=>28,
            "Viernes"=>100,
            "Sabado"=>10,
            "Domingo"=>0
        ];
        
        function sumarSueldoSemana($aSueldo) {
            $SueldoTotal = 0;

            // Mostramos el sueldo de cada día
            foreach ($aSueldo as $dia => $sueldo) {
                echo "El $dia has recibido un sueldo de $sueldo €<br>";
                
                $SueldoTotal += $sueldo;
            }

            return $SueldoTotal;
        }

        // Mostramos el sueldo total llamando a la funcion y pasandole el array con los sueldos diarios
        echo "<br><strong>El sueldo total de esta semana es: ". sumarSueldoSemana($aSueldoSemana)."€</strong>";
       ?>
    </main>
</body>
</html>