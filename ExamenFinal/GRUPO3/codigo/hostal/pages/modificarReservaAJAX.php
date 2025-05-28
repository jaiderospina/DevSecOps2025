<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['idReserva'])) {
            $id = $_POST['idReserva'];
            $idHabitacion = $_POST['idHabitacion'];
            $cantidadNueva = $_POST['cantidadNueva'];
            
            $reservaDAO = new ReservaDAO();
            $habitacionDAO = new HabitacionDAO();
            
            $cantidadDisponible = $habitacionDAO->obtenerHabitacionPorId($idHabitacion);
            if($cantidadDisponible->getCapacidad() >= $cantidadNueva){

                $resultado = $reservaDAO->actualizar_reserva($id, $cantidadNueva);

                if($resultado){
                    echo 'Reserva modificada exitosamente!';
                }else{
                    echo 'Ha ocurrido un error!';
                }
            }else{
                echo "capacidad no disponible para esta habitacion";
            }

        }
    }
?>