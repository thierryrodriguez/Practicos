<?php
require_once '../template/pag_principal.php';
echo "<p><h1>Ejercicio 3</h1><p><br>";
?>

<html>

<head>
    <link href="practico_1/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="color#ej_1"> 
    <span style=background-color:bisque>
        <?php
        $nombre = "Nicolás";
        $apellido = "García";
        $edad = 17;
        $direccion = "Alfonso Rodriguez Castelao 3730, esq. Ramallo";
        $correo = "garnico17@gmail.com";
        $num = "094034373";
        echo "Mi nombre es " . $nombre . " " . $apellido . ", tengo " . $edad . " años, vivo en " . $direccion . ", mi correo es " . $correo . " y mi numero es " . $num . ".";
        ?>
        </span>
    </div>
</body>

</html>