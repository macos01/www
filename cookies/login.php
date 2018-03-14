<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta charset="utf-8">
	<title>Portada</title>
</head>

<body>

	<div id="contenedor">

		<?php require('layout/cabecera.php') ?>
		<?php require('layout/sidebarIzq.php') ?>
		<?php require('layout/sidebarDer.php') ?>

		<div id="contenido">
			<h1>Acceso al sistema</h1>

			<form action="procesarLogin.php" method="POST">
			<fieldset>
			<legend>Usuario y contraseña</legend>
			<p><label>Name:</label> <input type="text" name="username" /></p>
			<p><label>Password:</label> <input type="text" name="password" /><br /></p>
			<button type="submit">Entrar</button>
			</fieldset>

		</div>

		<?php require('layout/pie.php') ?>

	</div>
	<!-- Fin del contenedor -->

</body>

</html>
