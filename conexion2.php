<?php
$servidor='localhost';
$basedatos='agencia';
$usuario='root';
$contrasena='';

$conexion2 = new mysqli($servidor,$usuario,$contrasena,$basedatos);
if ($conexion2->connect_errno)
{
	echo"error de conexion verifique sus datos ";
}
else 
{
	echo "<h1>Conectado listo para usar la base de datos de almacen</h1>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>db</title>
</head>
<body>
<a href="consulta2.php"><h1>consultas db<h1></a>
</body>
</html>