<?php
require('log_IUsuario.php');
require('dat_source.php');
require('log_usuario.php');

//No se si por cada metodo una conexion , o una conexion por DAO -> factory + dao??
class DAOusuario implements IUsuario
{
  //Nos trae todos los usuarios de nuestra tabla de usuarios
  public function selectUsuarios(){

  }
  //Nos trae un registro que buscamos por id
  public function selectUsuarioById($id){}

  /*Busca usuario por nombre, si existe devuelve $result con el id, sino es un false
  Util para unicamente comprobar si existe un usuari con el mismo nombre al register???*/
  public function searchUsuarioByName($nombre) {
    $data_source = new DataSource();
    $result = $data_source->getData("SELECT id FROM usuarios WHERE nombre = :nombre",
      array(':nombre'=>$nombre));

    return $result;
    //podriamos devolver un TO Usuario , o NUll en caso de que no existiese?? -> no porque si queremos mas datos,
    //habra que tener un  fetch
  }
  //Inserta el Usuario en la base de datos y nos devuelve la id
  public function insertUsuario(Usuario $usuario){
      $data_source = new DataSource();
      $result = $data_source->setData("INSERT INTO usuarios (nombre, password) VALUES (:nombre,:password)",
        array(':nombre'=>$usuario->getNombre(),':password'=>$usuario->getPassword()));

      //llega la id o 0 si error
      return $result;
  }
  //Actualiza el usuario y nos devuelve un id
  public function updateUsuario(Usuario $usuario){}
  //Elimina un usuario por su id
  public function deleteUsuario($id){}
}
?>
