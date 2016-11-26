<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Validar formulario con HTML5/Javascript y Php</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body >
		<h1>Validar formulario con HTML5/Javascript y Php</h1>
		<h2>Colaboración: 
			<a href="https://www.youtube.com/channel/UCJYiSCIMWDXBJiuID2pmFVA" target="_blank"> 
				<img src="imagenes/developero.jpg" class="logos" /> 
				</a>
				<div class="tooltip dev">
					Ir al canal de Developero
				</div>
				 y 
				<a href="https://www.youtube.com/user/giova50000" target="_blank"> 
					<img src="imagenes/logo.jpg" class="logos" /> 
					</a>
					<div class="tooltip gio">
						Ir al canal de GiovaelpeTv
					</div>
					</h2>
		<form action="validar.php" method="post" name="miform">
			<input type="text"  name="nombre" placeholder="Nombre"><span> </span>
			<input type="text"  name="apellido" placeholder="Apellido" /><span> </span>
			<input type="number"  name="edad" placeholder="Edad" /><span> </span>
			<input type="email" name="email" placeholder="Email" r /><span> </span>
			<input type="number" name="telefono" placeholder="Teléfono"  /><span> </span>
			<select name="sexo" > 
				<option value="">Elige un sexo</option>
				<option value="hombre">Hombre</option>
				<option value="mujer">Mujer</option>
			</select><span> </span>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>