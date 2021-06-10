<?php include "constantes.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .capa1 {
            background-color: aquamarine;
            width: 100%;
            height: 50px;
            margin-top: 0px;
            margin-left: 0px;
            text-align-last: center;
            text-align: right;
            vertical-align: middle;
        }
    </style>
    <title>Práctico 1</title>
</head>

<body>
    <div class="capa1">
        <a href="<?php echo RUTA_RAIZ; ?>practico_1/index.php">Inicio</a>
        <a href="<?php echo RUTA_RAIZ; ?>practico_1/extras/info.php">| Acerca de</a>
    </div>
    <nav>
        <ul>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/ejercicio_1.php">Ejercicio 1 - Calculadora</a> </li>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/ejercicio_2.php">Ejercicio 2 - Nota</a> </li>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/ejercicio_3.php">Ejercicio 3 - Concatenando cadenas</a> </li>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/ejercicio_4.php">Ejercicio 4 - Recorriendo arrays</a> </li>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/ejercicio_5.php">Ejercicio 5 - Recorriendo arrays multidimencionales</a> </li>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/ejercicio_6.php">Ejercicio 6 - Formularios</a> </li>
            <li> <a href="<?php echo RUTA_RAIZ; ?>practico_1/ejercicios/tabla.php">Conexión con base de datos - Tabla</a> </li>
        </ul>
    </nav>
</body>

</html>