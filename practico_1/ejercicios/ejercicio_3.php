<?php
require_once '../template/pag_principal.php';

?>

<!DOCTYPE html>
<html>
<h1>Ejercicio 3</h1>

<body bgcolor="7FEA92">

    <body>
        <span style="border: 1px solid; background-color:bisque">
            <?php
            $nombre = "Thierry";
            $apellido = "Rodriguez";
            $edad = 17;
            $direccion = "Alfonso Rodriguez Castelao 3730, esq. Ramallo";
            $correo = "thierryrodriguez16@gmail.com";
            $num = "094034373";
            echo "Mi nombre es " . $nombre . " " . $apellido . ", tengo " . $edad . " años, vivo en " . $direccion . ", mi correo es " . $correo . " y mi numero es " . $num . ".";
            ?>
        </span>
    </body>
</body>

</html>