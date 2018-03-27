<?php
class Usuario
{
  private $usuario_id;
  private $nombre;
  private $contraseña;

  public function __construct($nom, $con){
    $this->nombre = $nom;
    $this->contraseña = $con;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setUsuario_id($id){
    $this->$usuario_id = $id;
  }

  public function getNombre(){
    return $this->Nombre;
  }

  public function getUsuario_id(){
    return $this->$usuario_id;
  }

  public function setContraseña($contraseña){
    $this->contraseña = $contraseña;
  }

  public function getContraseña(){
    return $this->contraseña;
  }
}
 ?>
