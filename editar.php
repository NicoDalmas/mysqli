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
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">
    <link href="Sticky%20Footer%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">
    <link href="Sticky%20Footer%20Template%20for%20Bootstrap_files/sticky-footer.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/input.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Editar clientes</title>
  </head>
  <body>
    <div id="wrap">
      <div class="container">
        <div class="page-header">
        	<h2>EditarCliente <small>Niquillo</small></h2>
        </div>	
        <form action="crud.php" method="post" class="form-group">
      		<div class="form-group">
        		<p>Nombre: <input type="text" class="campo" name="nombre" value="<?php echo $datos['nombre'] ?>" pattern="[A-Za-z]{3,15}" maxlength="15" required><span></span></p>
        		<p>Domicilio: <input type="text" class="campo" name="domicilio" value="<?php echo $datos['domicilio'] ?>" pattern="[A-Za-z0-9]{3,20}" maxlength="20" required><span></span></p>
        		<input type="hidden" name="id" value="<?php echo $id; ?>">
        		<input type="submit" name="editar" value="Guardar" class="btn btn-primary">
      		</div>
        </form>
    	</div>
    </div>
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Footer de la pagina.</p>
      </div>
    </div>
    	<!--
    	<div id="footer">
          <div class="container">

            <p class="text-muted credit">Practica PHP 2016.</p>

          </div>
        </div>
        -->
  </body>
</html>