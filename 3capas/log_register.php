<?php
require('log_daoUsuario.php');

$nom_usuario = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$user_password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

$dao = new DAOusuario();


$usuario = $dao->searchUsuarioByName($nom_usuario);

if ($usuario) {
  echo "Se registrara un usuario con nombre $nom_usuario y contraseña $user_password";
  $usuario = new Usuario($nom_usuario,$user_password);
  echo "Registrando...";
}



?>
