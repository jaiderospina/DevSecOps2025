<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['id_reserva'])) {
            $id = $_POST['id_reserva'];
            
            $checkDAO = new CheckDAO();
            $habitacionDAO = new HabitacionDAO();
            $reservaDAO = new ReservaDAO();
            $reserva = $reservaDAO->buscar_reserva_por_id($id);

            $fechaHoy = date('Y-m-d');
            $check = new Check($fechaHoy ,$id);
            $resultado = $checkDAO->registrarCheckIn($check);
            $habitacionDAO->modificarDisponibilidad($reserva->getNumeroHabitacion(), 0);

            if($resultado){
                echo 'Check IN realizado exitosamente!';
            }else{
                echo 'Ha ocurrido un error!';
            }

        }
    }
?>