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
  //se crear el dao
  $user = new Usuario($user_name,$user_password);

  $dao = new DAOusuario();

  //Como comprobar las credenciales? comprobar con la query, comparando hash, comparando los param..??

  //Implementado:
  //En el caso de que $user == null, sigfica que no se ha podido obtener ningun usuario/pass correcto..
  $user = $dao->searchUsuarioByNamePass($user);

  if ($user == null){
    //Notificar no exito
    echo "Login incorrecto";
  }
  else {
    //Notificar exito
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = $user->getNombre();
		header("Location:../index.php");
  }
}


?>
