<?php
interface IUsuario
{
  public function searchUsuarioByName($user_name);

  public function insertUsuario(Usuario $usuario);
}

 ?>
