<?php
class DaoExample extends DaoBase
{
    private static $instance;

    public function __construct() {
        $table="table_example";
        parent::__construct($table);
    }

    public static function getInstance()
    {
      if (is_null( self::$instance ) )
      {
        self::$instance = new self();
      }
      return self::$instance;
    }

    public function exampleFunction($id){
		return DataSource::getInstance()->getAllData(
					"SELECT * FROM
						 $this->table
					WHERE
						id = :id"
						,array(':id'=>$id));
	}


    public function insertAlquiler($id, $param)
    {
			
        return DataSource::getInstance()->setData(
						"INSERT INTO
							$this->table (id,param)
						VALUES
							(:id,:param)",
							array(':id'=>$id,':param'=>$param));
        
    }
  }
?>
