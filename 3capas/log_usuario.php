<?php
class Usuario {
  private $nombre;
  private $contraseña;

  public function __construct($nom, $con){
    $this->nombre = $nom;
    $this->contraseña = $con;
  }

  public function showInfo(){
    echo $this->nombre ." + " . $this->contraseña;
  }

  public function registarUsuario(){


  }


}




 ?>
