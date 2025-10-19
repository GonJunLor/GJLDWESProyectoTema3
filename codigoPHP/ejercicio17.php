<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        td{
            border: 1px solid black;
            border-radius: 5px;
            max-width: 60px;
            width: 60px;
            height: 40px;
            text-align: center;
            background-color: rgb(188, 140, 119);
        }
        th{
            padding-right: 10px;
        }
        .ocupado{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 17</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 19/10/2025
        * 17.Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas 
        * que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando 
        * únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los 
        * asientos ocupados en cada fila y las personas que lo ocupan.
        */
        for($iFila=1;$iFila<=20;$iFila++){
            for($iColumna=1;$iColumna<=15;$iColumna++){
                $aTeatro[$iFila][$iColumna]=null;
            }
        }
        $aTeatro[1][1]="Juan";
        $aTeatro[8][13]="Pepe";
        $aTeatro[3][8]="Alfredo";
        $aTeatro[7][11]="Miguel";
        $aTeatro[2][2]="Miguel";
        $aTeatro[20][15]="Maria";
        
        print '<table>';
        
        $fila = 0;
        $numAsiento = 0;
        foreach ($aTeatro as $numFila=>$aFila) {
            echo "<tr>";
            $fila++;
            //echo "<th>Pasillo ".$fila."</th>";
            echo "<th>Pasillo ".$numFila."</th>";
            foreach ($aFila as $numAsiento=>$asiento) {
                //$numAsiento++;
                if(is_string($asiento)){
                    echo '<td class="ocupado">'.$asiento.'</td>';
                } else {
                    echo '<td>'.$fila.'-'.$numAsiento.'</td>';
                }
            }
            $numAsiento = 0;
            echo "</tr>";
        }
        echo "</table>";
        
       ?>
    </main>
</body>
</html>