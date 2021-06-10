<?php
require_once '../template/pag_principal.php';


?>

<!DOCTYPE HTML>
<html>
<h1>Ejercicio 5</h1>

<body>

	<body bgcolor="7FEA92">

		<?php

		$factura = array(
			array("Cantidad", 17),
			array("Descripción", 'Comida'),
			array("Preico Unitario", '$2'),
			array("Subtotal", '$34')
		);

		var_dump($factura);
		?>
	</body>
</body>

</html>