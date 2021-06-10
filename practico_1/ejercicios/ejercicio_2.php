<?php


require_once '../template/pag_principal.php';


?>

<!DOCTYPE HTML>
<html>
<h1>Ejercicio 2</h1>

<body>

    <body bgcolor="7FEA92">

        <?php
        for ($nota = 1; $nota <= 10; $nota++) {

            if ($nota == 1 >= 5) {
                $nota == 'insuficiente';
            } else if ($nota == 6 >= 9) {
                $nota == 'suficiente';
            } else if ($nota == 10 >= 11) {
                $nota == 'muyBien';
            } else if ($nota == 12) {
                $nota == 'excelente';
            }
            echo $nota . " ";
        }
        ?>
    </body>
</body>

</html>