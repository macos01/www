<?php
require('IUsuario.php');
require('ToUsuario.php');
require('core/EntidadBase.php');

class DAOusuario extends EntidadBase implements IUsuario
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
      $user = new Usuario($result['nombre'],$result['password'],$result['id']);
    }

    return $user;
  }

  public function insertUsuario(Usuario $usuario){
      return $this->dataSource->setData("INSERT INTO $this->table (nombre, password) VALUES (:nombre, :password)",
        array(':nombre'=>$usuario->getNombre(),':password'=>$usuario->getPassword()));
  }

}
?>
