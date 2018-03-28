<?php
class Usuario
{
  private $usuario_id;
  private $nombre;
  private $password;

  public function __construct($nom, $con){
    $this->nombre = $nom;
    $this->password = $con;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setUsuario_id($id){
    $this->$usuario_id = $id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getUsuario_id(){
    return $this->$usuario_id;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getPassword(){
    return $this->password;
  }
}
 ?>
