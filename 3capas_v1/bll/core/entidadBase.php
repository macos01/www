<?php

//Entidad / Modelo Base que implementa metodos "genericos" para uso de BD
class EntidadBase {
    protected $table; //Tabla de la base de datos
    protected $dataSource; //logica de conexion con la BD

	//Cada DAO extendera de una entidad base que tendra su propia dataSource
    protected function __construct($table) {
        $this->table=(string) $table;

        require_once('../dal/DataSource.php');
        $this->dataSource= DataSource::getInstance();
    }

    public function getAll(){
        return $this->dataSource->getAllData("SELECT * FROM $this->table ORDER BY id DESC", array());
    }

    public function getById($id){
        return $this->dataSource->getData("SELECT * FROM $this->table WHERE id = :id", array(':id'=>$id));
    }

		public function getBy($column, $value){
        return $this->dataSource->getData("SELECT * FROM $this->table WHERE $column = :value", array(':value'=>$value));
    }

}
?>
