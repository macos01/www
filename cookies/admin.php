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
			<?php
			//I do not know which way is bett-er.
				if (isset($_COOKIE["aut"]) && $_COOKIE["aut"] == "admin"){
						echo "<h1>Consola de administración</h1>";
						echo "<p> Aquí estarían todos los controles de administración </p>";
				}

				else {
					echo "<h1>Aceso denegado!</h1>";
					echo "<p>No tienes permisos suficientes para administrar la web. </p>";
				}

			?>
		</div>

		<?php require('layout/pie.php') ?>

	</div>
	<!-- Fin del contenedor -->

</body>

</html>
