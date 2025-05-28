<?php 
class Administrador{
    private $nombre;
    private $id_usuario;

    function __construct($nombre, $salario, $id_usuario){
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->id_usuario = $id_usuario;
    }

    function get_nombre(){
        return $this->nombre;
    }

    function get_id_usuario(){
        return $this->id_usuario;
    }
}
?>