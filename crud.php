<?php
	//CRUD = create, reade, update, delete
	//CREATE
	!isset($_POST) ? die('Acceso denegado') : ''; 
	require 'conexion.class.php';
	$db = new conexion();
	if (isset($_POST['alta'])) {
		$nombre = $_POST['nombre'];
		$domicilio = $_POST['domicilio'];
		$query = "INSERT INTO `cliente`(`nombre`, `domicilio`, `fecha_alta`) VALUES ('$nombre', '$domicilio', '" . date('Y-m-d') ."')";
		$result = $db->query($query);
		if ($db->affected_rows < 0)
			{
				header("location: cliente.php?error=Hubo un problema");
			}else
			{
				header("location: cliente.php");
			}
	}
	//UPDATE
	if (isset($_POST['editar'])) {
		$nombre = $_POST['nombre'];
		$domicilio = $_POST['domicilio'];
		$id = $_POST['id'];
		$query = "UPDATE cliente SET `nombre` = '$nombre' , `domicilio` = '$domicilio' WHERE cliente_id = '$id' ";
		$db->query($query);
		if ($db->affected_rows < 0)
			{
				header("location: cliente.php?error=Hubo un problema");
			}else
			{
				header("location: cliente.php");
			}
	}
	//REGISTRAR PEDIDO
	if (isset($_POST['pedido'])) {
		$cliente_id = $_POST['cliente'];
		$producto = $_POST['producto'];
		$importe = $_POST['importe'];
		settype($cliente_id, 'integer');
		$query = "INSERT INTO `pedido` (`cliente_id`, `producto`, `importe`) VALUES ('$cliente_id', '$producto', '$importe') ";
		$db->query($query);
		if ($db->affected_rows < 0)
			{
				header("location: index.php?error=Hubo un problema");
			}else
			{ 
				header("location: index.php");
			}
	}
?>