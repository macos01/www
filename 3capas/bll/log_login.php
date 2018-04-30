<?php session_start(); ?>
<?php
require('models/daoUsuario.php');

$user_name = $_REQUEST["username"];
$user_password = $_REQUEST["password"];

if (!isset($user_name) || empty($user_name) || !isset($user_password) || empty($user_password)) {
	 $_SESSION["login"] = false;
	 	echo "Problemas formulario";
}
else {
	
  $dao = new DAOusuario();
	$user = $dao->searchUsuarioByName($user_name);

	if(!$user) {
		  echo "Login incorrecto";
	}
	else {
		if (!$user->testPassword($user_password)){
	    echo "Login incorrecto";
	  }
	  else {
			$_SESSION["login"] = true;
			$_SESSION["nombre"] = $user->getNombre();
			header("Location:../index.php");
	  }
	}

}


?>
