<?php 

class Coordinador{

    private $nombre;
    private $id_usuario;

    public function __construct($nombre, $salario, $id_usuario){
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->id_usuario = $id_usuario;
    }

    public function getNom(){
        return $this->nombre;
    }

    public function getIdUsuario(){
        return $this->id_usuario;
    }
    

    

}

?>