<?php 

class Empleado{

    private $nombre;
    private $id_usuario;

    function __construct($nombre,$id_usuario){
        $this->nombre=$nombre;
        $this->id_usuario=$id_usuario;
    }

    function getNom(){
        return $this->nombre;
    }

    function getIdUsuario(){
        return $this->id_usuario;
    }

}

?>