<?php
require_once '../template/pag_principal.php';
echo "<p><h1>Ejercicio 5</h1><p><br>";

?>

<body>

<div class="color#ej_1"> 
		<?php

		$factura["cantidad"]["descripcion"] = '2';
		'objeto sólido';
		$factura["precio unitario"] = '$ 120';
		$factura["subtotal"] = '$ 120';

		array_push($factura);

		for ($i = 0; $i < count($factura); $i++) {
			echo "<br>" . $factura[$i];
		}


		?>
</div>
</body>