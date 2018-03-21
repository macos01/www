<?php
class DataSource {
  private $user = "3capas";
  private $password = "3capas";
  private $dsn = "mysql:host=localhost;dbname=personal";
  private $conexion;

  public function __construct(){
    try {
      $this->$conexion = new PDO($this->$dsn,$this->$user,$this->$password);
    } catch (PDOException $e) {
      echo "Error conexion base de datos: " . $e->getMessage();
    }
  }

    

}

/**
 *
 */
class DAOusuario extends DataSource
{
  function __construct(argument)
  {

  }
}

 ?>
