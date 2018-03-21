
<?php
require('log_usuario.php');

$nom_usuario = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$user_password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

$usuario = new Usuario($nom_usuario,$user_password);

$usuario->showInfo();




?>
