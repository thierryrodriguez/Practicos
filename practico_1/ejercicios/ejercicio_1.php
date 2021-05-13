<?php

require_once '../template/pag_principal.php';
echo "<p><h1>Ejercicio 1</h1><p><br>";



?>

<?php


$v1 = 12;
$v2 = 2;

echo "Los valores determinados para las operaciónes son " .  $v1 . " y " . $v2 . "<br>";
echo " <h2> Parte a </h2>";


echo "<h4> Suma </h4>";
echo "La suma de los valores es: " . ($v1 + $v2);
echo "<h4> Resta </h4>";
echo "La resta de los valores es: " . ($v1 - $v2);
echo "<h4> Multiplicacón </h4>";
echo "La multiplicación de los valores es: " . ($v1 * $v2);
echo "<h4> División </h4>";
echo "La división de los valores es: " . ($v1 / $v2);

echo "<hr>";
echo "<h2> Parte b </h2>";

if (($v1 % $v2) == 0) {

    echo $v1 . ' es multiplo de ' . $v2;
} else {

    echo $v1 . ' no es multiplo de ' . $v2;
}

echo "<hr>";

echo " <h2> Parte c </h2>";
if ($v1 >= $v2) {
    echo $v1 . ' es mayor que  ' . $v2;
} else {
    echo $v1 . ' no es mayor que ' .  $v2;
}

echo "<br>";

if ($v1 == $v2) {
    echo $v1 . ' es igual que ' . $v2;
} else {
    echo $v1 . ' no es igual que ' . $v2;
}


?>