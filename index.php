
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/select2.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/select2.full.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
		<div class="page-header text-center">
		  <h1>Index<small>-Niquillo</small></h1>
		</div>
			<h4><a href="cliente.php"> Ver Clientes </a></h4>
			<h4> Registrar Pedidos </h4>
			<?php
			require 'conexion.class.php';
				$db = new Conexion();
				$query = "SELECT DISTINCT cliente_id, nombre FROM cliente";
				$res = $db->query($query);
				$option = '';
				while ($row = mysqli_fetch_array($res)) {
					$option .= "<option value=\"$row[cliente_id]\">$row[nombre] </option>";
				}

			?>
			<form action="crud.php" method="POST" class="form-group">
			<p>Cliente 
				<select name="pedido" style="width: 200px;" class="js-example-basic-single">
					<option value="-">Selecciona un cliente:</option>
					<?php
					 echo $option; 
					 ?>				
				</select></p>
				<p>Producto<input type="text" name="producto"></p>
				<p>Importe<input type="number" name="importe"></p>
				<input type="submit" name="Enviar" class="btn btn-primary">

			</form>
			<h4>Informe de pedidos</h4>
			<table class="table table-striped table-bordered table table-hover table-responsive">
				<tr>
					<th>Cliente</th>
					<th>Domicilio</th>
					<th>Producto</th>
					<th>Importe</th>
				</tr>
			</table>
		</div>
	</div>	
</div>

<script type="text/javascript">
$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>
</body>
</html>