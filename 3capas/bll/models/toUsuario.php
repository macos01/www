<?php

class Usuario
{
  private $usuario_id;
  private $nombre;
  private $password;

  //Constructor completo, el $id no es relevante a veces
  public function __construct($nom, $con, $id = 0){
    $this->nombre = $nom;
    $this->password = $con;
	$this->usuario_id = $id;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setUsuario_id($id){
    $this->usuario_id = $id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getUsuario_id(){
    return $this->usuario_id;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getPassword(){
    return $this->password;
  }

  public static function hashPassword($password){
		return password_hash($password,PASSWORD_DEFAULT);
	}

	public function testPassword($password){
		 return password_verify($password, $this->password);
	}

}
 ?>
