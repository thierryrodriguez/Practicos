<?php


require_once '../template/pag_principal.php';

?>

<!DOCTYPE HTML>
<html>
<h1>Ejercicio 4</h1>

<body bgcolor="7FEA92">

    <?php

    $paises = ['Argentina', 'Brasil', 'Paraguay', 'Uruguay'];

    for ($i = 0; $i < count($paises); $i++) {
        echo $paises[0] . "<br>";
        echo $paises[1] . "<br>";
        echo $paises[2] . "<br>";
        echo $paises[3];
        break;
    }
    ?>
    <br>

    <body>

        <label for="pais">Elija un país:</label>
        <select name="pais" id="pais">
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Uruguay" selected>Uruguay</option>
        </select>
    </body>
</body>


</html>