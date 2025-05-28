<?php 

Class Cliente{

    private $nombre;
    private $email;
    private $id;
    private $ubicacion;
    private $numero;

    function __construct($nombre,$email, $ubicacion, $numero, $id = null){
        $this->nombre=$nombre;
        $this->email=$email;
        $this->id=$id;
        $this->ubicacion=$ubicacion;
        $this->numero=$numero;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getEmail(){
        return $this->email;
    }

    function getId(){
        return $this->id;
    }

    function getubicacion(){
        return $this->ubicacion;
    }

    function getNumero(){
        return  $this->numero;
    }
    

    function obtenerAtributosSeparadosPorPipe(){
        return $this->id. "|". $this->nombre. "|" .$this->email;
    }

}   


?>