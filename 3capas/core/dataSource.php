<?php
class DataSource {

  private static $instancia;
  private $user, $pass, $database, $host;
  private $conexion;

  private function __construct(){
    try {
		$db_cfg = require_once 'config/db.php';
	    $this->host=$db_cfg["host"];
	    $this->user=$db_cfg["user"];
	    $this->pass=$db_cfg["pass"];
	    $this->database=$db_cfg["database"];
      	$this->conexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database,
          $this->user, $this->pass);
    } catch (PDOException $e) {
      echo "Error conexion base de datos: " . $e->getMessage();
    }
  }

  public static function getInstance(){
    if (!self::$instancia){
      self::$instancia =  new DataSource();
    }
    return self::$instancia;
  }

  public function getData($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);
    return $consulta->fetch(PDO::FETCH_ASSOC);
  }

  public function getAllData($sql,$values){
	$consulta = $this->conexion->prepare($sql);
	$consulta->execute($values);
	return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function setData($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);
    return $this->conexion->lastInsertId();
  }

}

 ?>
