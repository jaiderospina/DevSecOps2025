<?php 

class Reserva{

    private $id;
    private $tipoHabitacion;
    private $numeroHabitacion;
    private $idCliente;
    private $fechaInicio;
    private $fechaFin;
    private $cantidadPersonas;


    function __construct($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $id = null){
        $this->tipoHabitacion=$tipoHabitacion;
        $this->numeroHabitacion=$numeroHabitacion;
        $this->idCliente=$idCliente;
        $this->fechaInicio=$fechaInicio;
        $this->fechaFin=$fechaFin;
        $this->cantidadPersonas=$cantidadPersonas;
        $this->id=$id;
    }

    public function getTipoHabitacion(){
        return $this->tipoHabitacion;
    }

    public function getNumeroHabitacion(){
        return $this->numeroHabitacion;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function getFechaInicio(){
        return $this->fechaInicio;
    }

    public function getFechaFin(){
        return $this->fechaFin;
    }

    public function getID(){
        return $this->id;
    }

    public function getCantidadPersonas(){
        return $this->cantidadPersonas;
    }
    
}


?>