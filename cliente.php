<?php 
require 'conexion.class.php';
if (isset($_GET['id'] )){
	$id = $_GET['id'];
	! is_numeric($id) ? die('Error al Eliminar') : '';

	$query = " DELETE FROM cliente WHERE cliente_id = $id" ;
	
	$db = new Conexion();
	$db->query($query);

	if ($db->affected_rows < 0)
		{
			header("location: cliente.php?error=Hubo un problema");
		}else
		{
			header("location: cliente.php");
		}

}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>clientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
		<div class="page-header text-center">
		  <h1>AgregarCliente <small>Niquillo</small></h1>
		</div>
		<?php
			if (isset($_GET['error'])) {
				$mensaje = $_GET['error'];

				echo htmlentities($mensaje);
			}
		?>
		<form action="crud.php" method="post" class="form-group">
					<div class="form-group">
					<p>Nombre: <input type="text" name="nombre"></p>
					<p>Domicilio: <input type="text" name="domicilio"></p>
					<input type="submit" class="btn btn-primary" name="alta" value="Guardar">
					</div>
		</form>

		<table class="table table-striped table-bordered table table-hover table-responsive">
				<tr>
					<td>Nombre</td>
					<td>Domicilio</td>
					<td>Fecha de Alta</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
				<?php
				
				$db = new conexion();
				// SELECT DISTINCT (para registros unicos)
				$query = "SELECT * FROM cliente";
				$res = $db->query($query);
				$table = '';
				while ( $row = mysqli_fetch_array($res) ) {
					// $table = $table . ''
					$table .= "<tr>";
					$table .= "<td>$row[nombre]</td>";
					$table .= "<td>$row[domicilio]</td>";
					$table .= "<td>$row[fecha_alta]</td>";
					$table .= "<td><a href=\"editar.php?id=$row[cliente_id]\">Editar</a></td>";
					$table .= "<td><a href=\"cliente.php?id=$row[cliente_id]\">Eliminar</a></td>";

					$table .= "</tr>";
				}
				
				echo $table;
			?>
			
			</table>

</body>
</html>		