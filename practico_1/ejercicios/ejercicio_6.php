<?php


require_once '../template/pag_principal.php';



?>
<!DOCTYPE html>
<meta charset="UTF-8">

<head>
    <h1>Ejercicio 5</h1>
    <br><br><br>
    <h2>Calculadora</h2>
    <link href="estilos.css" rel="stylesheet">
</head>
<html>

<body bgcolor="7FEA92">

    <body>
        <form method="POST">

            <h5>Ingrese un número</h5>
            <input type="number" name="v1" required>
            <br>
            <h5> Ingrese otro número</h5>
            <input type="number" name="v2" required>
            <br><br>

            <label for="oper">Seleccione la operación que desee realizar: </label>
            <select name="oper" id="oper"><br>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">Division</option>
            </select>

            <br><br>



            <input type="submit" value="Calcular">
        </form>

        <?php

        if (isset($_POST['v1'])) {
            if (isset($_POST['v2'])) {
                if (isset($_POST['oper'])) {

                    $v1 = $_POST['v1'];
                    $v2 = $_POST['v2'];
                    $oper = $_POST['oper'];


                    if ($oper == 'suma') {
                        echo "<br><br> El resultado de la suma es: " . ($v1 + $v2);
                    } elseif ($oper == 'resta') {
                        echo "<br><br> El resultado de la resta es: " . ($v1 - $v2);
                    } elseif ($oper == 'multiplicacion') {
                        echo "<br><br> El resultado de la multiplicación es: " . ($v1 * $v2);
                    } elseif ($oper == 'division') {
                        echo "<br><br> El resultado de la division es: " . ($v1 / $v2);
                    }
                }
            }
        }
        // ARREGLAR RESPUESTA DE RADIO BOX SI ES MÚLTIPLO O NO
        // if (isset($_POST['si'])) {
        //   if (isset($_POST['no'])) {
        //     if (isset($_POST['v1'])) {
        //       if (isset($_POST['v2'])) {


        //         $si = $_POST['si'];
        //       $no = $_POST['no'];
        //     $v1 = $_POST['v1'];
        //   $v2 = $_POST['v2'];


        // if ($si == 'si') {
        //   if (($v1 % $v2) == 0) {
        //     echo $v1 . '<br><br> es multiplo de ' . $v2;
        //} elseif ($no == 'no') {
        //   echo $v1 . '<br><br> no es multiplo de ' . $v2;
        // }
        //}
        //}
        //}
        //}
        //}

        // ARREGLAR RESPUESTA DE RADIO BOX MAYOR, MENOR E IGUAL
        //if (isset($_POST['si'])) {
        //  if (isset($_POST['no'])) {
        //    if (isset($_POST['v1'])) {
        //      if (isset($_POST['v2'])) {



        //        $si2 = $_POST['si2'];
        //      $no2 = $_POST['no2'];
        //    $v1 = $_POST['v1'];
        //  $v2 = $_POST['v2'];

        // if ($v1 == $v2 && $v1 > $v2) {
        //   echo "<br>" . $v1 . "<br> es igual que " . $v2;
        // echo "<br>" . $v1 . "<br> es mayor que " . $v2;
        // } else {
        //   echo $v1 . "<br> no es igual que " . $v2;
        // echo $v1 . "<br> es menor que " . $v2;
        // }
        // }
        // }
        // }
        // }


        ?>
        <!-- <p>Desea saber si el primer número es multiplo del segundo?</p>
            <input type="radio" id="si" name="si" value="si">
            <label for="si">SI</label><br>
            <input type="radio" id="no" name="no" value="no">
            <label for="no">NO</label>

            <br><br>

            <p>Desea saber cuál es mayor y menor?</p>
            <input type="radio" id="si2" name="op2" value="si2">
            <label for="si">SI</label><br>
            <input type="radio" id="no2" name="op2" value="no2">
            <label for="no">NO</label>

            <br><br> -->


        <hr>
        <hr>

        <h1>Ingrese sus datos</h1>

        <form method="POST">

            <label for="txt_nom">Nombre:</label>
            <input type="text" name="txt_nombre" required>

            <br><br>

            <label for="txt_apellido">Apellido:</label>
            <input type="text" name="txt_apellido" required>

            <br><br>

            <label for="txt_edad">Edad:</label>
            <input type="number" name="txt_edad" required>

            <br><br>

            <label for="txt_direc">Dirección:</label>
            <input type="text" name="txt_direc" required>

            <label for="txt_numAp">N° de casa/apto.:</label>
            <input type="number" name="txt_numAp" required>

            <br><br>

            <label for="txt_correo">Correo electrónico: </label>
            <input type="text" name="txt_correo" required>

            <br><br>

            <label for="txt_num">Número de celular: </label>
            <input type="number" name="txt_numero" required>

            <br><br>

            <input type="submit"><br>

        </form>
        <span style="border: 1px solid; background-color:bisque">

            <?php

            if (isset($_REQUEST['txt_nombre'])) {
                if (isset($_REQUEST['txt_apellido'])) {
                    if (isset($_REQUEST['txt_edad'])) {
                        if (isset($_REQUEST['txt_direc'])) {
                            if (isset($_REQUEST['txt_numAp'])) {
                                if (isset($_REQUEST['txt_correo'])) {
                                    if (isset($_REQUEST['txt_numero'])) {


                                        echo "<br> Me llamo " . $_POST['txt_nombre'] . " " .  $_POST['txt_apellido'] . " tengo " . $_POST['txt_edad'] . " años, vivo en " . $_POST['txt_direc'] . " "
                                            . $_POST['txt_numAp'] . ", mi correo electrónico es " . $_POST['txt_correo'] . " y mi número de celular es " . $_POST['txt_numero'] . ".";
                                    }
                                }
                            }
                        }
                    }
                }
            }


            ?>
            </div>

    </body>
</body>

</html>