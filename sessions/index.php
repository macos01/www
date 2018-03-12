<!DOCTYPE html>
<?php session_start(); ?>
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
			<h1>Página principal</h1>
			<p> Aquí está el contenido público, visible para todos los usuarios. </p>
		</div>

		<?php require('layout/pie.php') ?>

	</div>
	<!-- Fin del contenedor -->

</body>

</html>
