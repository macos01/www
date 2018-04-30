<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/marcos/config/autoload.php';
session_start();

$user_name = $_REQUEST["username"];
$user_password = $_REQUEST["password"];

if (!isset($user_name) || empty($user_name) || !isset($user_password) || empty($user_password)) {
	 $_SESSION["login"] = false;
	 	echo "Problemas formulario";
}
else {

  $dao = new UserDao();
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
			header("Location:../public/index.php");
	  }
	}

}


?>
