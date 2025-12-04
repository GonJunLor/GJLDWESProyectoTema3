<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilosHome.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        td{
            border: 1px solid black;
            border-radius: 5px;
            max-width: 65px;
            width: 65px;
            height: 30px;
            text-align: center;
            background-color: rgb(188, 140, 119);
        }
        th{
            padding-right: 10px;
        }
        .ocupado{
            background-color: greenyellow;
        }
        h3{
            text-align: center;
            margin: 10px 0px;
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
        * @since: 27/10/2025
        * 17.Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas 
        * que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando 
        * únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los 
        * asientos ocupados en cada fila y las personas que lo ocupan.
        */

        // --- 1. Inicialización del array bidimensional para el teatro (20 filas x 15 asientos) ---
        // Constantes con datos iniciales
        const FILAS = 20;
        const ASIENTOS = 15;

        // Bucle FOR anidado para inicializar todos los asientos a 'null' (vacíos)
        for($iFila=1;$iFila<=FILAS;$iFila++){
            for($iColumna=1;$iColumna<=ASIENTOS;$iColumna++){
                $aTeatro[$iFila][$iColumna]=null;
            }
        }

        // --- 2. Simulación de reservas (Ocupación de asientos) ---
        $aTeatro[1][1]="Juan";
        $aTeatro[8][13]="Pepe";
        $aTeatro[3][8]="Alfredo";
        $aTeatro[7][11]="Miguel";
        $aTeatro[2][2]="Miguel";
        $aTeatro[20][15]="Maria";
        
        // =========================================================================
        // === SECCIÓN A: Visualización de la Tabla HTML con FOREACH (Opción óptima)
        // =========================================================================
        echo '<h3>Tabla de Asientos (Recorrido con foreach)</h3>';
        print '<table>';
        
        
        foreach ($aTeatro as $numFila=>$aFila) { // Recorremos las filas
            echo "<tr>";
            echo "<th>Fila ".$numFila."</th>";
            foreach ($aFila as $numAsiento=>$asiento) { // Recorremos los asientos dentro de la fila
                if(is_string($asiento)){ // Asiento ocupado
                    echo '<td class="ocupado">'.$asiento.'</td>';
                } else { // Asiento libre
                    echo '<td>'.$numFila.'-'.$numAsiento.'</td>';
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        
        // =========================================================================
        // === SECCIÓN B: Tabla generada con FOR Anidado
        // =========================================================================

        echo '<h3>Tabla de Asientos (Recorrido con for)</h3>';
        echo '<table>';

        for ($iFila = 1; $iFila <= FILAS; $iFila++) { // Recorremos las filas 
            echo "<tr>";
            echo "<th>Fila ".$iFila."</th>"; 
            
            // Recorremos los asientos dentro de la fila
            for ($jAsiento = 1; $jAsiento <= ASIENTOS; $jAsiento++) {
                
                $nombreOcupante = $aTeatro[$iFila][$jAsiento];
                
                // Comprueba si está ocupado
                if (is_string($nombreOcupante)) {
                    echo '<td class="ocupado">'.$nombreOcupante.'</td>';
                } else {
                    echo '<td>'.$iFila.'-'.$jAsiento.'</td>';
                }
            }
            echo "</tr>";
        }

        echo "</table>";

        // =========================================================================
        // === SECCIÓN C: Tabla generada con WHILE Anidado
        // =========================================================================

        echo '<h3>Tabla de Asientos (Recorrido con while)</h3>';
        echo '<table>';

        // Inicialización de contadores para el WHILE
        $numFila = 1;

        // Bucle WHILE externo para recorrer las filas
        while ($numFila <= FILAS) {
            echo "<tr>";
            echo "<th>Fila ".$numFila."</th>"; 
            
            $numAsiento = 1; // 💡 Inicializamos el contador de asiento DENTRO del bucle de fila
            
            // Bucle WHILE interno para recorrer los asientos
            while ($numAsiento <= ASIENTOS) {
                
                $nombreOcupante = $aTeatro[$numFila][$numAsiento];
                
                // Comprueba si está ocupado
                if (is_string($nombreOcupante)) {
                    echo '<td class="ocupado">'.$nombreOcupante.'</td>';
                } else {
                    echo '<td>'.$numFila.'-'.$numAsiento.'</td>';
                }
                
                $numAsiento++; // Incremento obligatorio del contador del asiento
            }
            
            echo "</tr>";
            $numFila++; // Incremento obligatorio del contador de la fila
        }

        echo '</table>';

        // =========================================================================
        // === SECCIÓN D: Tabla generada con WHILE usando next(), key(), current()
        // =========================================================================

        echo '<h3>Tabla de Asientos (Recorrido con while y funciones)</h3>';
        echo '<table>';

        // Reiniciar el puntero de la matriz principal a la primera fila
        reset($aTeatro);

        // Bucle WHILE externo: Recorre las filas
        // La primera iteración es la Fila 1 (después de reset). next() se ejecuta al final para avanzar a la siguiente fila.
        while (($filaActual = current($aTeatro)) !== false) {
            $indiceFila = key($aTeatro);

            echo '<tr>';
            echo "<th>Fila ".$indiceFila."</th>";

            reset($filaActual); //se situa el puntero al comienzo del array
            while (($nombre = current($filaActual)) !== false) {
                $indiceAsiento = key($filaActual);

                // Comprueba si está ocupado
                if (is_string($nombre)) {
                    echo '<td class="ocupado">'.$nombre.'</td>';
                } else {
                    echo '<td>'.$indiceFila.'-'.$indiceAsiento.'</td>';
                }

                next($filaActual);
            }
            echo '</tr>';

            next($aTeatro);
        }
        echo '</table>';
        
        
       ?>
    </main>
</body>
</html>