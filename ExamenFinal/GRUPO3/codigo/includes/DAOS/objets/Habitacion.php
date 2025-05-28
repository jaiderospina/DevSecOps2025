<?php 

class Habitacion {
    private $id_habitacion;
    private $tipo_habitacion;
    private $precio_dia;
    private $precio_noche;
    private $id_cliente;
    private $disponible;
    private $capacidad;

    public function __construct($tipo_habitacion, $precio_dia, $precio_noche, $capacidad, $id_cliente = null, $id_habitacion = null, $disponible=1) {
        $this->id_habitacion = $id_habitacion;
        $this->tipo_habitacion = $tipo_habitacion;
        $this->precio_dia = $precio_dia;
        $this->precio_noche = $precio_noche;
        $this->id_cliente = $id_cliente;
        $this->disponible = $disponible;
        $this->capacidad = $capacidad;
    }

    public function getIdHabitacion() {
        return $this->id_habitacion;
    }

    public function getTipoHabitacion() {
        return $this->tipo_habitacion;
    }

    public function getPrecioDia() {
        return $this->precio_dia;
    }

    public function getPrecioNoche() {
        return $this->precio_noche;
    }

    public function getIdCliente() {
        return $this->id_cliente;
    }

    public function getdisponible() {
        return $this->disponible;
    }

    public function getCapacidad(){
        return $this->capacidad;
    }

}


?>