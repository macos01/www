<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/marcos/config/Autoload.php';

class UserDAO extends EntityBase
{

	public function __construct() {
        $table="usuarios";
        parent::__construct($table);
    }

  public function searchUsuarioByName($user_name){
    $result = $this->dataSource->getData("SELECT nombre, password, id  FROM $this->table WHERE nombre = :nombre",
        array(':nombre'=>$user_name));

    $user = null;

    if ($result){
      $user = new User($result['nombre'],$result['password'],$result['id']);
    }

    return $user;
  }

  public function insertUsuario(Usuario $usuario){
      return $this->dataSource->setData("INSERT INTO $this->table (nombre, password) VALUES (:nombre, :password)",
        array(':nombre'=>$usuario->getNombre(),':password'=>$usuario->getPassword()));
  }

}
?>
