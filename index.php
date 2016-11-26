
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/select2.css">
		<link rel="stylesheet" type="text/css" href="css/input.css">
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
						require 'validar.php';
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
						<p>
							Cliente 
							<select name="cliente" style="width: 200px;" class="js-example-basic-single" required>
								<option value="-">Selecciona un cliente:</option>
								<?php
									echo $option; 
								?>				
							</select>
						</p>
						<p>Producto<input type="text" class="campo" name="producto" pattern="[A-Za-z]{3,15}" maxlength="15" required/><span></span></p>
						<p>Importe<input type="number" class="campo" name="importe" required min="0" max="9999" maxlength="5"><span></span></p>
						<input type="submit" name="pedido" value="Enviar" class="btn btn-primary">

					</form>
						<?php 
							$query = "SELECT * FROM `pedido` P JOIN `cliente` C ON P.cliente_id = C.cliente_id";
							$res = $db->query($query);
							$table = '';
							while ($row = mysqli_fetch_array($res)) {
								$table .= '<tr>';
									$table .= "<td>$row[nombre]</td>";
									$table .= "<td>$row[domicilio]</td>";
									$table .= "<td>$row[producto]</td>";
									$table .= "<td>$row[importe]</td>";
								$table .= '</tr>';
							}

						?>

						<h4>Informe de pedidos</h4>
						<table style="text-align: center;" class="table table-striped table-bordered table table-hover table-responsive">
							<tr>
								<th>Nombre</th>
								<th>Domicilio</th>
								<th>Producto</th>
								<th>Importe</th>
							</tr>
							<tr>
								<?php 
									echo $table;
								?>
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