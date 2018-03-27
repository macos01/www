<?php
class DataSource {
  private $user = "3capas";
  private $password = "pass";
  private $dsn = "mysql:host=localhost;dbname=personal";
  private $conexion;

  public function __construct(){
    try {
      $this->conexion = new PDO($this->dsn,$this->user,$this->password);
    } catch (PDOException $e) {
      echo "Error conexion base de datos: " . $e->getMessage();
    }
  }

  //falta comprobar errores de la sql y values
  public function ejecutarConsulta($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);
    // var_dump($values);
    //PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas del conjunto de resultados.
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    // var_dump($resultado);
    return $resultado;
  }

}

 ?>
