<?php


require_once '../template/pag_principal.php';



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2>Datos de una base de datos</h2>
</head>
<body bgcolor= '#E5F0E0'>

<?php
    const USER = "root";
    const PASS = "";
    const DB = "personas";
    const HOST = "localhost";
    const DSN = "mysql:host=". HOST . ";dbname=". DB;

    try{

        $obj_conexion = new PDO(DSN, USER, PASS);
        
    if (!$obj_conexion) {
        echo "<h3>No se pudo conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }else{
        echo "<h3>Conexión exitosa PHP - MySQL.</h3><hr><br>";

        $consulta = 'SELECT * FROM personas';
        $resultado = $obj_conexion->query($consulta);

        if ($resultado->fetchColumn() > 0) {
            echo "<table border='1' align='center'>
            <tr bgcolor= '#AFC85C'>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Edad</th>
               <th>CI</th>
            </tr>";

            foreach ($resultado as $fila) {
               echo "<tr bgcolor= '#DAF7A6'>";
                    echo "<td>". $fila["nombre"]. "</td>";
                    echo "<td>". $fila["apellido"]. "</td>";
                    echo "<td>". $fila["edad"]. "</td>";
                    echo "<td>". $fila["ci"]. "</td>";
               echo "</tr>";
            }

        }else {
            echo "No hay registros.";
        }
    }


       
   }catch(PDOException $e){
       echo "Falló la conexión: ". $e->getMessage();
   }

?>


</body>
</html>