<?php 

class Inventario{

    private $id;
    private $idUsuario;
    private $idProducto;
    private $fecha;
    private $cantidad;

    function __construct($idUsuario, $idProducto, $fecha, $cantidad, $id = null) {
        $this->idUsuario = $idUsuario;
        $this->idProducto = $idProducto;
        $this->fecha = $fecha;
        $this->cantidad = $cantidad;
        $this->id = $id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getID(){
        return $this->id;
    }
    
}

?>