<?php 

require 'objets/Habitacion.php';

class HabitacionDAO {
    private ConexionBD $db;

    function __construct() {
        $this->db = new ConexionBD();
    }

    public function agregarHabitacion(Habitacion $habitacion) {
        $numero_habitacion = mysqli_real_escape_string($this->db->conexion(), $habitacion->getIdHabitacion());
        $tipo_habitacion = mysqli_real_escape_string($this->db->conexion(), $habitacion->getTipoHabitacion());
        $precio_dia = mysqli_real_escape_string($this->db->conexion(), $habitacion->getPrecioDia());
        $precio_noche = mysqli_real_escape_string($this->db->conexion(), $habitacion->getPrecioNoche());
        $capacidad = mysqli_real_escape_string($this->db->conexion(), $habitacion->getCapacidad());

        $query_verificar = "SELECT id_habitacion FROM habitaciones WHERE id_habitacion = $numero_habitacion";
        $resultado_verificar = mysqli_query($this->db->conexion(), $query_verificar);

        if (mysqli_num_rows($resultado_verificar) > 0) {
            return "Ese numero de habitacion ya esta registrado!";
        }

        $query = "INSERT INTO habitaciones (id_habitacion, tipo_habitacion, precio_dia, precio_noche, disponible, capacidad) VALUES ($numero_habitacion, '$tipo_habitacion', $precio_dia, $precio_noche, 1, $capacidad)";
        
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            return "Habitacion registrada exitosamente!";
        } else {
            return "Ha ocurrido un error";
        }
    }
    

    public function modificarHabitacionTipo($id_habitacion, $nuevo_tipo) {
        $id_habitacion = mysqli_real_escape_string($this->db->conexion(), $id_habitacion);
        $nuevo_tipo = mysqli_real_escape_string($this->db->conexion(), $nuevo_tipo);

        $query = "UPDATE habitaciones SET tipo_habitacion = '$nuevo_tipo' WHERE id_habitacion = $id_habitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);

        return $resultado;
    }

    public function modificarEstado($id_habitacion, $id_cliente, $disponible) {
        $id_habitacion = mysqli_real_escape_string($this->db->conexion(), $id_habitacion);
        $id_cliente = mysqli_real_escape_string($this->db->conexion(), $id_cliente);
        $disponible = mysqli_real_escape_string($this->db->conexion(), $disponible);

        $query = "UPDATE habitaciones SET id_cliente = $id_cliente, disponible = $disponible WHERE id_habitacion = $id_habitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);

        return $resultado;
    }

    public function modificarDisponibilidad($id_habitacion, $disponible) {
        $id_habitacion = mysqli_real_escape_string($this->db->conexion(), $id_habitacion);
        $disponible = mysqli_real_escape_string($this->db->conexion(), $disponible);

        $query = "UPDATE habitaciones SET disponible = $disponible WHERE id_habitacion = $id_habitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);

        return $resultado;
    }

    public function obtenerHabitacionesDisponibles() {
        $query = "SELECT * FROM habitaciones WHERE disponible = 1";
        $resultado = mysqli_query($this->db->conexion(), $query);

        $habitaciones = [];
        while ($row = mysqli_fetch_assoc($resultado)) {
            $habitaciones[] = new Habitacion($row['tipo_habitacion'], $row['precio_dia'], $row['precio_noche'], $row['capacidad'], $row['id_cliente'], $row['id_habitacion']);
        }

        return $habitaciones;
    }

    public function obtenerHabitacionesOcupadas() {
        $query = "SELECT * FROM habitaciones WHERE disponible = 0";
        $resultado = mysqli_query($this->db->conexion(), $query);

        $habitaciones = [];
        while ($row = mysqli_fetch_assoc($resultado)) {
            $habitaciones[] = new Habitacion($row['tipo_habitacion'], $row['precio_dia'], $row['precio_noche'], $row['capacidad'], $row['id_cliente'], $row['id_habitacion']);
        }

        return $habitaciones;
    }

    public function obtenerHabitaciones() {
        $query = "SELECT * FROM habitaciones";
        $resultado = mysqli_query($this->db->conexion(), $query);

        $habitaciones = [];
        while ($row = mysqli_fetch_assoc($resultado)) {
            $habitaciones[] = new Habitacion($row['tipo_habitacion'], $row['precio_dia'], $row['precio_noche'], $row['capacidad'], $row['id_cliente'], $row['id_habitacion'], $row['disponible']);
        }

        return $habitaciones;
    }

    public function obtenerHabitacionesDisponiblesPorTipoDeHabitacion($tipo) {
        $tipo = mysqli_real_escape_string($this->db->conexion(), $tipo);

        $query = "SELECT * FROM habitaciones WHERE disponible = 1 AND tipo_habitacion = '$tipo'";
        $resultado = mysqli_query($this->db->conexion(), $query);

        $habitaciones = [];
        while ($row = mysqli_fetch_assoc($resultado)) {
            $habitaciones[] = new Habitacion($row['tipo_habitacion'], $row['precio_dia'], $row['precio_noche'], $row['capacidad'], $row['id_cliente'], $row['id_habitacion']);
        }

        return $habitaciones;
    }

    public function obtenerHabitacionesPorTipo($tipo) {
        $tipo = mysqli_real_escape_string($this->db->conexion(), $tipo);

        $query = "SELECT * FROM habitaciones WHERE tipo_habitacion = '$tipo'";
        $resultado = mysqli_query($this->db->conexion(), $query);

        $habitaciones = [];
        while ($row = mysqli_fetch_assoc($resultado)) {
            $habitaciones[] = new Habitacion($row['tipo_habitacion'], $row['precio_dia'], $row['precio_noche'], $row['capacidad'], $row['id_cliente'], $row['id_habitacion']);
        }

        return $habitaciones;
    }

    public function eliminarHabitacion($id_habitacion) {
        $id_habitacion = mysqli_real_escape_string($this->db->conexion(), $id_habitacion);

        $query = "DELETE FROM habitaciones WHERE id_habitacion = $id_habitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);

        return $resultado;
    }

    public function obtenerTipoHabitacionPorId($id_habitacion) {
        $id_habitacion = mysqli_real_escape_string($this->db->conexion(), $id_habitacion);
    
        $query = "SELECT tipo_habitacion FROM habitaciones WHERE id_habitacion = $id_habitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
            return $row['tipo_habitacion'];
        } else {
            return null;
        }
    }
    
    public function obtenerHabitacionPorId($id_habitacion) {
        $id_habitacion = mysqli_real_escape_string($this->db->conexion(), $id_habitacion);
    
        $query = "SELECT * FROM habitaciones WHERE id_habitacion = $id_habitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
    
            $habitacion = new Habitacion($row['tipo_habitacion'], $row['precio_dia'], $row['precio_noche'], $row['capacidad'], $row['id_cliente'], $row['id_habitacion']);
    
            return $habitacion;
        } else {
            return null;
        }
    }

}


?>