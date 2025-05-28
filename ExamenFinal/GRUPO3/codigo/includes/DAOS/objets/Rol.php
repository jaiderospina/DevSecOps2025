<?php 

class Rol {

    private $rol;

    public function __construct($rol){
        $this->rol = $rol;
    }

    public function get_rol(){
        return $this->rol;
    }

}

?>