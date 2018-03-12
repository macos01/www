<!DOCTYPE html>
<?php session_start();
	?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta charset="utf-8">
	<title>Portada</title>
</head>

<body>

	<div id="contenedor">

		<!-- i dont know why the session is not destroyed and cabecera.php do not refreshed-->
		<?php
			session_unset();
			session_destroy();
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
