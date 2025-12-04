<!DOCTYPE html>
<html lang="es">
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
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 15</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 16/10/2025
        * 15.Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana. (Array asociativo con los nombres de los días de la semana).
        */
        echo("<h3>Mis Cuentas</h3>");
        
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
 
        echo("<h3>Sueldo diario:</h3>");
        
        // Recoremos el sueldo semanal
        foreach ($aSueldoSemana as $dia => $sueldoDiario) {
            $sueldoTotal += $sueldoDiario; // vamos sumando el sueldo de cada día
            print("El ". $dia . " has cobrado ". $sueldoDiario . "€</br>"); // Mostrar el sueldo diario
        }
        
        echo("<h3>Sueldo semanal:</h3>");
        
        echo("<b>Total: ". $sueldoTotal ."€</b>"); 
       ?>
    </main>
</body>
</html>