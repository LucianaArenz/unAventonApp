<?php


                include_once "php/conection.php"; // conectar y seleccionar la base de datos
				$link = conectar();

?>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
<title> Bienvenida </title>
<meta charset="utf-8"/>
</head>
<body class="FondoBienvenida">
	<div class="BienvenidaMensaje">Bienvenido a UnAventón!</div>
	<div class="CajaBienvenida">
		<div class="CrearUnaCUenta">Crear una cuenta</div>
		<table class="CajaRegistro">
			<tr>
				<td>
					<input type="text" id="nombreusuario" class="FormularioRegistrarse" style="width:90%" name="user" placeholder="Nombre...">
				</td>
				<td>
					<input type="text" id="nombreusuario" class="FormularioRegistrarse" style="width:90%" name="user" placeholder="Apellido...">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" id="nombreusuario" class="FormularioRegistrarse" style="width:192%" name="user" placeholder="Correo electronico...">
				</td>
			</tr>
			<tr>
				<td>
					<div class="FechaNacimiento">Fecha Nacimiento</div>
				</td>
			</tr>
			<tr>
				<td >
					<input type="date" value="2013-01-08" id="nombreusuario" class="FormularioRegistrarse" name="user">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" id="nombreusuario" class="FormularioRegistrarse" style="width:192%" name="user" placeholder="Contraseña...">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" id="nombreusuario" class="FormularioRegistrarse" style="width:192%" name="user" placeholder="Repetri contraseña...">
				</td>
			</tr>
		</table>
	</div>
	<div class="CajaDerechaCajaBienvenida">
		<div class="FraseCompartiendoDestinos">
			Ve a donde quieras, desde donde quieras.
		</div>
		<div class="main-container">
			<div class="fixer-container">
				<a href="Inicio.php"><input type="submit" class="BotonIngresar" value="Ingresar" ></a>
			</div>
		</div>
	</div>
</body>
</html>
