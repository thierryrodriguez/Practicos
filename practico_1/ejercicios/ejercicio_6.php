<?php


require_once '../template/pag_principal.php';
echo "<p><h1>Ejercicio 6</h1><p><br>";


?>
<!DOCTYPE html>
<meta charset="UTF-8">

<head>
    <h3>Calculadora</h3>
</head>
<html>

<body bgcolor="7FEA92">

    <body>
        <form method="POST">
            <h5>Ingrese un número</h5>
            <input type="number" name="v1">
            <br>
            <h5> Ingrese otro número</h5>
            <input type="number" name="v2">
            <br><br>
            <label for="oper">Seleccione la operación que desee realizar: </label>
            <select name="oper" id="oper"><br>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">Division</option>
            </select>
            <br><br>
            <input type="radio" id="si" name="opcion" value="si">
            <label for="si">SI</label><br>
            <input type="radio" id="no" name="opcion" value="no">
            <label for="no">NO</label><br>
            <br>
            <input type="submit">
            <?php

            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            $oper = $_POST['oper'];
            $opcion = $_POST['si'];
            $opcion = $_POST['no'];

            if ($oper == 'suma') {
                echo "<br> El resultado de la suma es: " . ($v1 + $v2);
            } elseif ($oper == 'resta') {
                echo "<br> El resultado de la resta es: " . ($v1 - $v2);
            } elseif ($oper == 'multiplicacion') {
                echo "<br> El resultado de la multiplicación es: " . ($v1 * $v2);
            } elseif ($oper == 'division') {
                echo "<br> El resultado de la division es: " . ($v1 / $v2);
            }

            if ($opcion == 'si') {
                if (($v1 % $v2) == 0) {

                    echo $v1 . ' es multiplo de ' . $v2;
                } else {

                    echo $v1 . ' no es multiplo de ' . $v2;
                }
            }
            ?>
        </form>
    </body>
</body>

</html>