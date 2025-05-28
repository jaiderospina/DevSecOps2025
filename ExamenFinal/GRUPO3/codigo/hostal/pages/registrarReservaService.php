<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['tipo_habitacion']) && isset($_POST['cliente']) && isset($_POST['fecha_inicio']) && isset($_POST['fecha_finalizacion'])) {
            $numeroHabitacion = $_POST['tipo_habitacion'];
            $cliente = $_POST['cliente'];
            $fechaInicio = $_POST['fecha_inicio'];
            $fechaFin = $_POST['fecha_finalizacion'];
            $cantidadPersonas = $_POST['cantidadPersonas'];

            $reservaDAO = new ReservaDAO();
            $habitacionDAO = new HabitacionDAO();

            $habitacion = $habitacionDAO->obtenerHabitacionPorId($numeroHabitacion);
            $tipo_habitacion = $habitacion->getTipoHabitacion();

            if($habitacion->getCapacidad() >= $cantidadPersonas){
                $resultado = $reservaDAO->registrar_reserva(new Reserva($tipo_habitacion, $numeroHabitacion, $cliente, $fechaInicio, $fechaFin, $cantidadPersonas));
                $habitacionDAO->modificarEstado($numeroHabitacion, $cliente, 1);
                
                $datetime_actual = date('Y-m-d H:i:s');
                $historialDAO = new historialDAO();
                $historialDAO->registrarHistorialReservas(new Historial($datetime_actual, "Registro reserva habitacion #". $numeroHabitacion, $numeroHabitacion));

                if($resultado){
                    echo "Reserva registrada con exito!";
                }else{
                    echo "Ha ocurrido un error";
                }
            }else{
                echo "Cantidad de personas no disponible.";
            }
            
        }
    }
?>