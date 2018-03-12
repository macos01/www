<!DOCTYPE html>
<?php session_start(); ?>
<?php

//strip_tags : Retira las etiquetas html y php de un string
//htmlentities : Convierte caracteres especiales en entidades html
//trim : elimina los espacios en blanco iniciales y finales del string
$usuario = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

//isset : determina si una variable esta definida y no es null
//empty:  determina si una variable esta vacia
if (!isset($usuario) || empty($usuario) || !isset($password) || empty($password)) {
	echo "<h1>ERROR</h1>";
	echo "<p> El usuario o contraseña no son válidos </p>";
}

else {

	if ($usuario == "user" && $password == "userpass") {
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = "Usuario";
		$_SESSION["esAdmin"] = false;
	}

	elseif ($usuario == "admin" && $password == "adminpass") {
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = "Administrador";
		$_SESSION["esAdmin"] = true;
	}
	else {
		$_SESSION["login"] = false;
	}
}
?>
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
			if ($_SESSION["login"] == true){
				echo "<h1>Bienvenido " . $_SESSION["nombre"] . "</h1>";
				echo "<p> Usa el menú de la izquierda para navegar. </p>";
			}

			else {
				echo "<h1>ERROR</h1>";
				echo "<p> El usuario o contraseña no son válidos </p>";
			}

		?>
		</div>

		<?php require('layout/pie.php') ?>

	</div>
	<!-- Fin del contenedor -->
</body>

</html>
