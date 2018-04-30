<?php
require('models/daoUsuario.php');

$user_name = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$user_password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

if (!isset($user_name) || empty($user_name) || !isset($user_password) || empty($user_password)) {
	 echo "Problemas formulario";
}
else {

	$dao = new DAOusuario();
	$user = $dao->searchUsuarioByName($user_name);

  if (!$user) {

    $user = new Usuario($user_name,$user_password);
		$user->setPassword($user->hashPassword($user->getPassword()));

    if($dao->insertUsuario($user)){
      	header("Location:../index.php");
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
