<!DOCTYPE html>
<html lang="es">
<body>
    <div id="aviso">CURSO 2025/2026 -- DAW 2 -- I.E.S. LOS SAUCES
    <nav>
        <div><a href="../indexProyectoTema3.php">Volver</a>
        <h2> <a href="../indexProyectoTema3.php">Tema 3</a> - Ejercicio 25</h2>
        <h2>Gonzalo Junquera Lorenzo</h2>
    </nav>
    <main>
       <?php 
       /**
        * @author: Gonzalo Junquera Lorenzo
        * @since: 06/10/2025
        * 25.Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
        */
        require_once "../core/231018libreriaValidacion.php"; // importamos nuestra libreria
                
        $entradaOK = true; //Variable que nos indica que todo va bien
        ?>
        <h2>DATOS PERSONALES</h2>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
            <label for="text_campo">Texto simple:</label>
            <input type="text" id="text_campo" name="text_campo">
            <br>
            <label for="password_campo">Contraseña:</label>
            <input type="password" id="password_campo" name="password_campo">
            <br>
            <label for="email_campo">Correo electrónico:</label>
            <input type="email" id="email_campo" name="email_campo">
            <br>
            <label for="url_campo">URL:</label>
            <input type="url" id="url_campo" name="url_campo">
            <br>
            <label for="tel_campo">Teléfono:</label>
            <input type="tel" id="tel_campo" name="tel_campo">
            <br>
            <label for="search_campo">Búsqueda:</label>
            <input type="search" id="search_campo" name="search_campo">
            <br>
            <label for="hidden_campo">Campo oculto (no visible):</label>
            <input type="hidden" id="hidden_campo" name="hidden_campo" value="valorOculto">
            <br>

            <label for="number_campo">Número (con min/max):</label>
            <input type="number" id="number_campo" name="number_campo" min="0" max="100" step="5">
            <br>
            <label for="range_campo">Rango (Slider):</label>
            <input type="range" id="range_campo" name="range_campo" min="0" max="10">
            <br>
            <label for="color_campo">Selector de color:</label>
            <input type="color" id="color_campo" name="color_campo">
            <br>

            <label for="date_campo">Fecha:</label>
            <input type="date" id="date_campo" name="date_campo">
            <br>
            <label for="time_campo">Hora:</label>
            <input type="time" id="time_campo" name="time_campo">
            <br>
            <label for="datetime_local_campo">Fecha y hora local:</label>
            <input type="datetime-local" id="datetime_local_campo" name="datetime_local_campo">
            <br>
            <label for="month_campo">Mes y año:</label>
            <input type="month" id="month_campo" name="month_campo">
            <br>
            <label for="week_campo">Semana:</label>
            <input type="week" id="week_campo" name="week_campo">
            <br>

            <label for="file_campo">Subir archivo:</label>
            <input type="file" id="file_campo" name="file_campo">
            <br>
            <label for="submit_campo">Botón de enviar:</label>
            <input type="submit" id="submit_campo" name="submit_campo" value="Enviar Datos">
            <br>
            <label for="reset_campo">Botón de limpiar:</label>
            <input type="reset" id="reset_campo" name="reset_campo" value="Limpiar Formulario">
            <br>
            <label for="button_campo">Botón genérico:</label>
            <input type="button" id="button_campo" name="button_campo" value="Clic aquí">
            <br>

            <label>Opciones (Radio Group):</label><br>
            <input type="radio" id="radio1" name="radio_grupo" value="opcion1">
            <label for="radio1" style="display: inline-block; width: auto;">Opción 1</label><br>
            <input type="radio" id="radio2" name="radio_grupo" value="opcion2">
            <label for="radio2" style="display: inline-block; width: auto;">Opción 2</label><br>
            <br>

            <label>Selección múltiple (Checkbox):</label><br>
            <input type="checkbox" id="checkA" name="check_multiple[]" value="valorA">
            <label for="checkA" style="display: inline-block; width: auto;">Valor A</label><br>
            <input type="checkbox" id="checkB" name="check_multiple[]" value="valorB">
            <label for="checkB" style="display: inline-block; width: auto;">Valor B</label><br>
            <br>

            <label for="textarea_campo">Área de texto (Textarea):</label><br>
            <textarea id="textarea_campo" name="textarea_campo" rows="4" cols="50"></textarea>
            <br>

            <label for="select_campo">Lista desplegable (Select):</label>
            <select id="select_campo" name="select_campo">
                <option value="">-- Elija una opción --</option>
                <option value="opc_s1">Opción Selector 1</option>
                <option value="opc_s2">Opción Selector 2</option>
            </select>
            <br>

            <label for="select_multiple_campo">Selector múltiple (Select):</label>
            <select id="select_multiple_campo" name="select_multiple_campo[]" multiple size="3">
                <option value="m1">Múltiple 1</option>
                <option value="m2">Múltiple 2</option>
                <option value="m3">Múltiple 3</option>
            </select>
            <br>

            <label for="datalist_campo">Campo con sugerencias (Datalist):</label>
            <input list="opciones_sugeridas" id="datalist_campo" name="datalist_campo">
            <datalist id="opciones_sugeridas">
                <option value="Sugerencia A">
                <option value="Sugerencia B">
                <option value="Sugerencia C">
            </datalist>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
       
    </main>
</body>
<head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" href="../webroot/media/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="../webroot/css/estilos.css">
    <title>Gonzalo Junquera Lorenzo</title>
    <style>
        #telefono, #nombre {
            background-color: lightgoldenrodyellow;
        }
        main{
            width:700px;
            height: 2000px;
            margin: auto;
            background-color: #eeeeee;
            border: 2px solid lightgray;
            border-radius: 20px;
            margin-top: 20px;
            padding: 10px;
        }
        main h2{
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            margin: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #335d7fff;
        }
        main p{margin:10px 20px;}
        form *{
            margin-top: 10px; 
        }
        label{
            font-family: 'Times New Roman', Times, serif;
            display: inline-block;
            width: 120px;
            margin-left: 20px;
            font-size: 1.2rem;
        }
        label[for="aceptarRgpd"]{width: 200px;}
        label[for="fecha_nacimiento"]{width: 170px;}
        .aviso{
            font-size: 0.75rem;
            margin-left: 20px;
        }
        input{
            padding: 5px 10px;
            margin-top: 20px;
            margin-right: 5px;
            font-size: 1.2rem;
            border-radius: 5px;
            font-family: 'Times New Roman', Times, serif;
            border: 0px solid grey;
        }
        input[readonly]{
            background-color: #d3d3d3ff;
            color: #6e6e6eff;
        }
        input[type="date"]{width: 190px;}
        input[type="checkbox"]{
            width: 20px;
            height: 18px;
        }
        input[name="enviar"], button{
            padding: 10px 25px;
            font-size: 1.2rem;
            margin: 20px 120px;
            border-radius: 20px;
            background-color: #4988bbff;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            border: 0px solid #252525ff;
        }
        .error{
            font-family: 'Times New Roman', Times, serif;
            color: red;
            font-size: 0.9rem;
        }
    </style>
</head>
</html>