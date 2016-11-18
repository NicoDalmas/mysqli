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

    
    <!-- Bootstrap core CSS -->
    <link href="Sticky%20Footer%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Sticky%20Footer%20Template%20for%20Bootstrap_files/sticky-footer.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<meta charset="utf-8">
	<title>Editar clientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div id="wrap">
<div class="container">

<div class="page-header">
          
       
	<h2>EditarCliente <small>Niquillo</small></h2>
</div>	
	<form action="crud.php" method="post" class="form-group">
		<div class="form-group">
		<p>Nombre: <input type="text" name="nombre" value="<?php echo $datos['nombre'] ?>"></p>
		<p>Domicilio: <input type="text" name="domicilio" value="<?php echo $datos['domicilio'] ?>"></p>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="editar" value="Guardar" class="btn btn-primary">
		</div>
	</form>
	  
      
      


       
        
      </div>
    </div>

    <div id="footer">
      <div class="container">


        <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk/">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>



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