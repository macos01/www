<?php
/**
 *
 */
interface IUsuario
{
  //Nos trae todos los usuarios de nuestra tabla de usuarios
  public function selectUsuarios();
  //Nos trae un registro que buscamos por id
  public function selectUsuarioById($id);
  //Busca usuario por su nombre y si existe devulve su id
  public function searchUsuarioByName($nombre);
  //Inserta el Usuario en la base de datos y nos devuelve la id
  public function insertUsuario(Usuario $usuario);
  //Actualiza el usuario y nos devuelve un id
  public function updateUsuario(Usuario $usuario);
  //Elimina un usuario por su id
  public function deleteUsuario($id);

}

 ?>
