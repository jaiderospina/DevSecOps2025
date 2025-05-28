<?php 

require 'objets/Check.php';

class CheckDAO {
    private ConexionBD $db;

    public function __construct() {
        $this->db = new ConexionBD();
    }

    public function registrarCheckIn(Check $check) {
        $fecha = mysqli_real_escape_string($this->db->conexion(), $check->getFecha());
        $idReserva = mysqli_real_escape_string($this->db->conexion(), $check->getIdReserva());

        $query = "INSERT INTO check_in (fecha, id_reserva) VALUES ('$fecha', $idReserva)";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return mysqli_insert_id($this->db->conexion());
        } else {
            return null;
        }
    }

    public function registrarCheckOut(Check $check) {
        $fecha = mysqli_real_escape_string($this->db->conexion(), $check->getFecha());
        $idReserva = mysqli_real_escape_string($this->db->conexion(), $check->getIdReserva());

        $query = "INSERT INTO check_out (fecha, id_reserva) VALUES ('$fecha', $idReserva)";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return mysqli_insert_id($this->db->conexion());
        } else {
            return null;
        }
    }
}


?>