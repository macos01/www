<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta charset="utf-8">
	<title>Portada</title>
</head>

<body>

	<div id="contenedor">

		<?php
		if (isset($_COOKIE["aut"])) {
			setcookie("aut","",time()-700000,".dominiochulo");
		}
		?>

		<?php require('layout/cabecera.php') ?>
		<?php require('layout/sidebarIzq.php') ?>
		<?php require('layout/sidebarDer.php') ?>


		<div id="contenido">
			<h1>Hasta pronto!</h1>
		</div>

		<?php require('layout/pie.php') ?>

	</div>
	<!-- Fin del contenedor -->

</body>

</html>
