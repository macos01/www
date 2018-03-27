<?php
require('log_IUsuario.php');
require('dat_source.php');
require('log_usuario.php');
class DAOusuario implements IUsuario
{
  //Nos trae todos los usuarios de nuestra tabla de usuarios
  public function selectUsuario(){

  }
  //Nos trae un registro que buscamos por id
  public function selectUsuarioById($id){}

  //Busca usuario por su nombre y si existe devulve su id
  //util para comprobar si se puede o no registar un usuario con el nombre
  public function searchUsuarioByName($nombre) {
    $data_source = new DataSource();
    $result = $data_source->ejecutarConsulta("SELECT id FROM usuarios WHERE nombre = :nombre",
      array(':nombre'=>$nombre));

    //si true -> existe un usuario con ese nombre
    if ($result){
      echo "Existe un usuario con ese nombre";
    }
    else {
      echo "No existe un usuario con ese nombre";
    }

  }
  //Inserta el Usuario en la base de datos y nos devuelve la id
  public function insertUsuario(Usuario $usuario){}
  //Actualiza el usuario y nos devuelve un id
  public function updateUsuario(Usuario $usuario){}
  //Elimina un usuario por su id
  public function deleteUsuario($id){}
}
?>
