<!DOCTYPE html>
<?php

//strip_tags : Retira las etiquetas html y php de un string
//htmlentities : Convierte caracteres especiales en entidades html
//trim : elimina los espacios en blanco iniciales y finales del string
$usuario = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
$cookie_value="";
$cookie_tvida=time();
$login = false;
//isset : determina si una variable esta definida y no es null
//empty:  determina si una variable esta vacia
if (!isset($usuario) || empty($usuario) || !isset($password) || empty($password)) {

}

else {

	if ($usuario == "user" && $password == "userpass") {

		$cookie_value="user";
		$cookie_tvida=time()+3600*24;
		$login = true;
	}

	elseif ($usuario == "admin" && $password == "adminpass") {

		$cookie_value="admin";
		$cookie_tvida=time()+3600*24;
		$login = true;
	}
	setcookie("aut",$cookie_value,$cookie_tvida,".dominiochulo");
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
			if ($login){
				echo "<h1>Bienvenido $cookie_value </h1>";
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
