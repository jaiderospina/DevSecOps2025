<?php 

class Producto{

    private $id;
    private $nombre;
    private $precio;
    private $imagen;
    private $cantidad;
    private $presentacion;

    function __construct($nombre,$precio, $imagen, $presentacion, $cantidad = null, $id = null){
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->imagen=$imagen;
        $this->cantidad=$cantidad;
        $this->id=$id;
        $this->presentacion=$presentacion;
    }

    public function getNom(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }


    public function getimagen(){
        return $this->imagen;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function getId(){
        return $this->id;
    }

    public function getPresentacion(){
        return $this->presentacion;
    }

}

?>