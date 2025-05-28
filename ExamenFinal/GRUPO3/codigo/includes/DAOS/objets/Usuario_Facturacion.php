<?php 

class Usuario_Facturacion{

    private $id_usuario;
    private $nombre;

    public function __construct($id_usuario, $nombre){
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
    }

    public function get_id_usuario(){
        return $this->id_usuario;
    }    

    public function get_nombre(){
        return $this->nombre;
    }

}


?>