<?php
require 'conexion.class.php';
if (isset($_GET['id'])) {
	$db = new conexion();
	$id = $_GET['id'];
	$query = "SELECT * FROM clientes WHERE clientes_id = $id";
	$res = $db->query($query);
	$datos = mysqli_fetch_array($res);
	
}else{
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar clientes</title>
</head>
<body>
	<h2>Editar cliente</h2>
	<form>
		<p>Nombre</p>
	</form>
</body>
</html>