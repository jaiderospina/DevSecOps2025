<?php

class Historial{

    private $id;
    private $fecha;
    private $descripcion;
    private $id_reserva;

    function __construct($fecha, $descripcion, $id_reserva, $id = null){
        $this->id = $id;
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
        $this->id_reserva = $id_reserva;
    }

    function getId(){
        return $this->id;
    }

    function getFecha(){
        return $this->fecha;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getIdReserva(){
        return $this->id_reserva;
    }

}

?>