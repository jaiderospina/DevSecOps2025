<?php
    class Venta {

    private $id_venta;
    private $id_producto;
    private $fecha;
    private $cantidad;

    public function __construct($id_producto, $fecha, $cantidad, $id_venta = null){
        $this->id_venta = $id_venta;
        $this->id_producto = $id_producto;
        $this->fecha = $fecha;
        $this->cantidad = $cantidad;
    }

    public function get_id_venta(){
        return $this->id_venta;
    }

    public function get_id_producto(){
        return $this->id_producto;
    }

    public function get_fecha(){
        return $this->fecha;
    }

    public function get_cantidad(){
        return $this->cantidad;
    }

    }

?>