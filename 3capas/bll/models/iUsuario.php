<?php
interface IUsuario
{
  //Nos trae un registro que buscamos por nombre y contraseña , devuelve el TO User
  public function searchUsuarioByNamePass(Usuario $usuario);

  //Inserta el Usuario en la base de datos y nos devuelve la id o 0 si error
  public function insertUsuario(Usuario $usuario);
}

 ?>
