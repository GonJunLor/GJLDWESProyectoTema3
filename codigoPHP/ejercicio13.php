<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES</div>
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a></div>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 13</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 19/10/2025
        * 13.Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.
        */

        /**
         * Registra la visita actual y cuenta las visitas desde una fecha específica.
         *
         * @param string $fecha_inicio Fecha en formato 'YYYY-MM-DD' a partir de la cual contar.
         * @param string $archivo_log Ruta al archivo de registro de visitas.
         * @return int El número de visitas registradas desde la fecha de inicio.
        */
        function contar_visitas($fecha_inicio) {
            // Archivo donde se va a guardar los timestamp actual
            $archivo_log = '../tmp/visitas.log';

            // Obtener el timestamp actual (segundos desde 1970)
            $timestamp_actual = (new DateTime())->getTimestamp();
            
            // Añadir el timestamp actual al archivo de log en una nueva línea
            // FILE_APPEND asegura que se añade al final sin sobreescribir
            // LOCK_EX bloquea el archivo para el usuario actual mientras se esta escribiendo
            file_put_contents($archivo_log, $timestamp_actual . "\n", FILE_APPEND | LOCK_EX);
            
            // Convertir la fecha de inicio a timestamp para hacer la comparación numérica
            $timestamp_inicio = (new DateTime($fecha_inicio))->getTimestamp();
            
            // Obtener el contenido completo del archivo de log
            $contenido_log = @file_get_contents($archivo_log); 
            
            // Si el archivo no existe o está vacío, no hay visitas que contar
            if (empty($contenido_log)) {
                return 0;
            }
            
            // Separar el contenido en un array, donde cada elemento es un timestamp
            $aVisitas_registradas = explode("\n", trim($contenido_log));
           
            // Recorrer los timestamps del log
            $contador = 0;
            foreach ($aVisitas_registradas as $timestamp_visita) {
                // Aseguramos que la línea es un número válido y es posterior o igual al inicio
                if (is_numeric($timestamp_visita) && $timestamp_visita >= $timestamp_inicio) {
                    $contador++;
                }
            }
            
            return $contador;
        }

        // --- EJEMPLO DE USO ---
        date_default_timezone_set('Europe/Madrid');
        $fecha_corte = '2025-10-15'; // La fecha desde la cual queremos contar

        // 1. Llamar a la función para registrar la visita y obtener el conteo
        $total_visitas = contar_visitas($fecha_corte);

        // 2. Mostrar el resultado
        echo "<h3>Contador de Visitas</h3>";
        echo "<p>Desde el <b>" . $fecha_corte . "</b>, la página ha tenido un total de <b>" . $total_visitas . "</b> visitas.</p>";
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