<?php 

require 'objets/Historial.php';

class historialDAO {
    private ConexionBD $db;

    function __construct() {
        $this->db = new ConexionBD();
    }

    public function registrarHistorialReservas(Historial $historial) {
        
        $descripcion = mysqli_real_escape_string($this->db->conexion(), $historial->getDescripcion());
        $fecha = mysqli_real_escape_string($this->db->conexion(), $historial->getFecha());
        $id_reserva = mysqli_real_escape_string($this->db->conexion(), $historial->getIdReserva());

        $query = "INSERT INTO historial_reservas (descripcion, fecha, id_reserva) VALUES ('$descripcion', '$fecha', '$id_reserva')";
        
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    public function registrarHistorialVentas(Historial $historial) {
        
        $descripcion = mysqli_real_escape_string($this->db->conexion(), $historial->getDescripcion());
        $fecha = mysqli_real_escape_string($this->db->conexion(), $historial->getFecha());
        $id_reserva = mysqli_real_escape_string($this->db->conexion(), $historial->getIdReserva());

        $query = "INSERT INTO historial_ventas (descripcion, fecha, id_venta) VALUES ('$descripcion', '$fecha', '$id_reserva')";
        
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerHistorialVentas(){

        $query = "SELECT * FROM historial_ventas";
        $result = mysqli_query($this->db->conexion(), $query);

        $historial = array();

        if ($result) {
            while ($fila = mysqli_fetch_assoc($result)) {
                $registro = new Historial($fila["fecha"], $fila["descripcion"], $fila["id_venta"], $fila["id"]);
                $historial[] = $registro;
            }
        }

        return $historial;

    }

    public function obtenerHistorialReservas(){

        $query = "SELECT * FROM historial_reservas";
        $result = mysqli_query($this->db->conexion(), $query);

        $historial = array();

        if ($result) {
            while ($fila = mysqli_fetch_assoc($result)) {
                $registro = new Historial($fila["fecha"], $fila["descripcion"], $fila["id_reserva"], $fila["id"]);
                $historial[] = $registro;
            }
        }

        return $historial;

    }

}


?>