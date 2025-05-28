<?php 

class Check{

    private $fecha;
    private $idReserva;

    function __construct($fecha,$idReserva){
        $this->fecha=$fecha;
        $this->idReserva=$idReserva;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getidReserva(){
        return $this->idReserva;
    }

}

?>