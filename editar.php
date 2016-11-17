<?php
require 'conexion.class.php';
if (isset($_GET['id'])) {
	$db = new conexion();
	$id = $_GET['id'];
	if (! is_numeric($id)) {
		die('La información es incorrecta');
	}
	
	$query = "SELECT * FROM cliente WHERE cliente_id = $id";
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
	<form action="crud.php" method="post">
		<p>Nombre: <input type="text" name="nombre" value="<?php echo $datos['nombre'] ?>"></p>
		<p>Domicilio: <input type="text" name="domicilio" value="<?php echo $datos['domicilio'] ?>"></p>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="editar" value="Guardar">
	</form>
</body>
</html>