<?php
class DataSource {
  private $user = "3capas";
  private $password = "pass";
  private $dsn = "mysql:host=localhost;dbname=personal";
  private $conexion;

  //PDO para cerrar la conexion con la base de datos??? , habria que "reconectar"
  public function __construct(){
    try {
      $this->conexion = new PDO($this->dsn,$this->user,$this->password);
    } catch (PDOException $e) {
      echo "Error conexion base de datos: " . $e->getMessage();
    }
  }

  //falta comprobar errores de la sql y values
  public function getData($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);

    //PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas del conjunto de resultados.
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
  }

  //lastInsertId problemas hilos,,,etc??
  public function setData($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);
    //lastInsertId() devuelve la ultima id insertada en la base de datos.
    //problema? si inserto otra cosa, querre el id???
    $resultado = $this->conexion->lastInsertId();
    return $resultado;
  }

}

 ?>
