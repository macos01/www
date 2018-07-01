<?php
class ControladorBase{

    public $helper;

    public function __construct() {
        require_once 'DataSource.php';
        require_once 'DaoBase.php';


        foreach(glob("daos/*.php") as $file){
            require_once $file;
        }

        require_once 'core/Ayuda.php';
        $this->helper=new Ayuda();
        //require_once 'ModeloBase.php';

        //Incluir todos los modelos


        session_start();
    }

    public function view($vista,$datos = []){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor;
        }

        $helper=new Ayuda();
        require_once 'views/'.$vista;
    }

    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO,$id=0){
        header("Location:index.php?controller=".$controlador."&action=".$accion."&id=".$id);
    }

    public function refresh()
    {
        header("Refresh: 0");
    }

    public function goBack()
    {
        $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }

        header("Location: " . $previous);
    }

    public function helper()
    {
        return $this->helper;
    }
}
?>
