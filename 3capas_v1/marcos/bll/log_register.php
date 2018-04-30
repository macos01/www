<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/marcos/config/Autoload.php';

$user_name = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$user_password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

if (!isset($user_name) || empty($user_name) || !isset($user_password) || empty($user_password)) {
	 echo "Problemas formulario";
}
else {

	$dao = new UserDao();
	$user = $dao->searchUsuarioByName($user_name);

  if (!$user) {

    $user = new User($user_name,$user_password);
		$user->setPassword($user->hashPassword($user->getPassword()));

    if($dao->insertUsuario($user)){
      	header("Location:../public/index.php");
    }
    else {
      echo "Registro incorrecto";
    }
  }
  else {
    echo "Existe un usuario ya";
  }
}


?>
