<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['idReserva'])) {
            $id = $_POST['idReserva'];
            $idHabitacion = $_POST['idHabitacion'];
            
            $reservaDAO = new ReservaDAO();
            $habitacionDAO = new HabitacionDAO();

            $resultado = $reservaDAO->eliminar_reserva_por_id($id);
            $habitacionDAO->modificarEstado($idHabitacion, 0, 1);            

            $datetime_actual = date('Y-m-d H:i:s');
            $historialDAO = new historialDAO();
            $historialDAO->registrarHistorialReservas(new Historial($datetime_actual, "Reserva eliminada en habitacion #". $idHabitacion, $idHabitacion));

            if($resultado){
                echo 'Reserva eliminado exitosamente!';
            }else{
                echo 'Ha ocurrido un error!';
            }

        }
    }
?>