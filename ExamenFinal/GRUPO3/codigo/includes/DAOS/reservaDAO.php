<?php

require 'objets/Reserva.php';

class ReservaDAO {

    private $db;

    public function __construct(){
        $this->db = new ConexionBD();
    }

    public function registrar_reserva(Reserva $reserva) {
        $tipoHabitacion = $reserva->getTipoHabitacion();
        $numeroHabitacion = $reserva->getNumeroHabitacion();
        $idCliente = $reserva->getIdCliente();
        $fechaInicio = $reserva->getFechaInicio();
        $fechaFin = $reserva->getFechaFin();
        $cantidadPersonas = $reserva->getCantidadPersonas();

        $tipoHabitacion = mysqli_real_escape_string($this->db->conexion(), $tipoHabitacion);
        $numeroHabitacion = mysqli_real_escape_string($this->db->conexion(), $numeroHabitacion);
        $idCliente = mysqli_real_escape_string($this->db->conexion(), $idCliente);
        $fechaInicio = mysqli_real_escape_string($this->db->conexion(), $fechaInicio);
        $fechaFin = mysqli_real_escape_string($this->db->conexion(), $fechaFin);
        $cantidadPersonas = mysqli_real_escape_string($this->db->conexion(), $cantidadPersonas);

        $query = "INSERT INTO reserva (tipo_habitacion, numero_habitacion, id_cliente, Fecha_Inicio, Fecha_Fin, cantidad_personas) VALUES ('$tipoHabitacion', '$numeroHabitacion', $idCliente, '$fechaInicio', '$fechaFin', $cantidadPersonas)";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function buscar_cantidad_por_id_cliente($idCliente, $idHabitacion){
        $query = "SELECT * FROM reserva WHERE id_cliente = $idCliente and numero_habitacion = $idHabitacion";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $tipoHabitacion = $fila['tipo_habitacion'];
            $numeroHabitacion = $fila['numero_habitacion'];
            $idCliente = $fila['id_cliente'];
            $fechaInicio = $fila['Fecha_Inicio'];
            $fechaFin = $fila['Fecha_Fin'];
            $cantidadPersonas = $fila['cantidad_personas'];

            $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas);
            return $reserva;
        } else {
            return null;
        }
    }

    public function buscar_reserva_por_id($reserva_id) {
        $query = "SELECT * FROM reserva WHERE id_reserva = $reserva_id";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $tipoHabitacion = $fila['tipo_habitacion'];
            $numeroHabitacion = $fila['numero_habitacion'];
            $idCliente = $fila['id_cliente'];
            $fechaInicio = $fila['Fecha_Inicio'];
            $fechaFin = $fila['Fecha_Fin'];
            $cantidadPersonas = $fila['cantidad_personas'];

            $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $reserva_id);
            return $reserva;
        } else {
            return null;
        }
    }

    public function buscar_reserva_por_num_habitacion($numeroHabitacion) {
        $query = "SELECT * FROM reserva WHERE numero_habitacion = $numeroHabitacion ORDER BY id_reserva DESC LIMIT 1";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $reserva_id = $fila['id_reserva'];
            $tipoHabitacion = $fila['tipo_habitacion'];
            $numeroHabitacion = $fila['numero_habitacion'];
            $idCliente = $fila['id_cliente'];
            $fechaInicio = $fila['Fecha_Inicio'];
            $fechaFin = $fila['Fecha_Fin'];
            $cantidadPersonas = $fila['cantidad_personas'];
    
            $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $reserva_id);
            return $reserva;
        } else {
            return null;
        }
    }
    

    public function actualizar_reserva($reserva_id, $cantidadNueva) {

        $query = "UPDATE reserva SET cantidad_personas = $cantidadNueva WHERE id_reserva = $reserva_id";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminar_reserva_por_id($reserva_id) {
        $query = "DELETE FROM reserva WHERE id_reserva = $reserva_id";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    public function obtener_todas_reservas() {
        $reservas = array();

        $query = "SELECT * FROM reserva";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $id_reserva = $fila["id_reserva"];
                $tipoHabitacion = $fila['tipo_habitacion'];
                $numeroHabitacion = $fila['numero_habitacion'];
                $idCliente = $fila['id_cliente'];
                $fechaInicio = $fila['Fecha_Inicio'];
                $fechaFin = $fila['Fecha_Fin'];
                $cantidadPersonas = $fila['cantidad_personas'];
                $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $id_reserva);
                $reservas[] = $reserva;
            }
        }

        return $reservas;
    }

    public function obtenerReservasSinCheckIn() {
        $reservasSinCheckIn = array();
    
        $query = "SELECT * FROM reserva WHERE id_reserva NOT IN (SELECT id_reserva FROM checkin)";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $id_reserva = $fila["id_reserva"];
                $tipoHabitacion = $fila['tipo_habitacion'];
                $numeroHabitacion = $fila['numero_habitacion'];
                $idCliente = $fila['id_cliente'];
                $fechaInicio = $fila['Fecha_Inicio'];
                $fechaFin = $fila['Fecha_Fin'];
                $cantidadPersonas = $fila['cantidad_personas'];
                $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $id_reserva);
                $reservasSinCheckIn[] = $reserva;
            }
        }
    
        return $reservasSinCheckIn;
    }
    
    public function comprobar_reserva($id_reserva_a_comprobar) {
        $reservaEncontrada = false;
        $query = "SELECT * FROM reserva WHERE id_reserva = $id_reserva_a_comprobar AND id_reserva NOT IN (SELECT id_reserva FROM check_in) AND id_reserva NOT IN (SELECT id_reserva FROM check_out)";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $reservaEncontrada = true;
        }
    
        return $reservaEncontrada;
    }
    

    public function obtener_reservas_sin_checkin() {
        $reservasSinCheckIn = array();
    
        $query = "SELECT * FROM reserva WHERE id_reserva NOT IN (SELECT id_reserva FROM check_in)";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $id_reserva = $fila["id_reserva"];
                $tipoHabitacion = $fila['tipo_habitacion'];
                $numeroHabitacion = $fila['numero_habitacion'];
                $idCliente = $fila['id_cliente'];
                $fechaInicio = $fila['Fecha_Inicio'];
                $fechaFin = $fila['Fecha_Fin'];
                $cantidadPersonas = $fila['cantidad_personas'];
                $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $id_reserva);
                $reservasSinCheckIn[] = $reserva;
            }
        }
    
        return $reservasSinCheckIn;
    }

    
    public function obtenerReservasConCheckIn() {
        $reservasConCheckInSinCheckOut = array();
    
        $query = "SELECT * FROM reserva WHERE id_reserva IN (SELECT id_reserva FROM check_in) AND id_reserva NOT IN (SELECT id_reserva FROM check_out)";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $id_reserva = $fila["id_reserva"];
                $tipoHabitacion = $fila['tipo_habitacion'];
                $numeroHabitacion = $fila['numero_habitacion'];
                $idCliente = $fila['id_cliente'];
                $fechaInicio = $fila['Fecha_Inicio'];
                $fechaFin = $fila['Fecha_Fin'];
                $cantidadPersonas = $fila['cantidad_personas'];
                $reserva = new Reserva($tipoHabitacion, $numeroHabitacion, $idCliente, $fechaInicio, $fechaFin, $cantidadPersonas, $id_reserva);
                $reservasConCheckInSinCheckOut[] = $reserva;
            }
        }
    
        return $reservasConCheckInSinCheckOut;
    }
    
    public function obtenerIngresosPorSemana() {
        $ingresosPorSemana = array();
    
        $query = "SELECT YEAR(Fecha_Inicio) AS anio, WEEK(Fecha_Inicio) AS semana, SUM(precio_dia) AS ingresos
                  FROM reserva
                  INNER JOIN habitaciones ON reserva.numero_habitacion = habitaciones.id_habitacion
                  GROUP BY anio, semana
                  ORDER BY anio, semana";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $semana = $fila["semana"];
                $ingresos = $fila["ingresos"];
                $ingresosPorSemana[] = array("semana" => $semana, "ingresos" => $ingresos);
            }
        }
    
        return $ingresosPorSemana;
    }
    
    public function obtenerIngresosMesAnterior() {
        $ingresosMesAnterior = 0;
        $fechaInicioMesAnterior = date("Y-m-01", strtotime("last month"));
        $fechaFinMesAnterior = date("Y-m-t", strtotime("last month"));
    
        $query = "SELECT SUM(precio_dia) AS ingresos
                  FROM reserva
                  INNER JOIN habitaciones ON reserva.numero_habitacion = habitaciones.id_habitacion
                  WHERE Fecha_Inicio >= '$fechaInicioMesAnterior' AND Fecha_Inicio <= '$fechaFinMesAnterior'";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            $fila = mysqli_fetch_assoc($resultado);
            $ingresosMesAnterior = $fila["ingresos"] ?? 0;
        }
    
        return $ingresosMesAnterior;
    }
    
    public function obtenerIngresosMesActual() {
        $ingresosMesActual = 0;
        $fechaInicioMesActual = date("Y-m-01");
        $fechaFinMesActual = date("Y-m-t");
    
        $query = "SELECT SUM(precio_dia) AS ingresos
                  FROM reserva
                  INNER JOIN habitaciones ON reserva.numero_habitacion = habitaciones.id_habitacion
                  WHERE Fecha_Inicio >= '$fechaInicioMesActual' AND Fecha_Inicio <= '$fechaFinMesActual'";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            $fila = mysqli_fetch_assoc($resultado);
            $ingresosMesActual = $fila["ingresos"] ?? 0;
        }
    
        return $ingresosMesActual;
    }

    public function obtenerIngresosAnioActual() {
        $ingresosAnioActual = 0;
        $anioActual = date("Y");
    
        $query = "SELECT SUM(precio_dia) AS ingresos
                  FROM reserva
                  INNER JOIN habitaciones ON reserva.numero_habitacion = habitaciones.id_habitacion
                  WHERE YEAR(Fecha_Inicio) = $anioActual";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            $fila = mysqli_fetch_assoc($resultado);
            $ingresosAnioActual = $fila["ingresos"] ?? 0;
        }
    
        return $ingresosAnioActual;
    }
    
    
    

}

?>
