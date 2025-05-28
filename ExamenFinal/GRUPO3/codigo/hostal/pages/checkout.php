<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['id_reserva'])) {
            $id = $_POST['id_reserva'];
            
            $checkDAO = new CheckDAO();
            $reservaDAO = new ReservaDAO();
            $reserva = $reservaDAO->buscar_reserva_por_id($id);
            $fechaHoy = date('Y-m-d');
            $check = new Check($fechaHoy ,$id);
            $resultado = $checkDAO->registrarCheckOut($check);
            $idHabitacion = $reserva->getNumeroHabitacion();

            $habitacionDAO = new HabitacionDAO();
            $resultado = $habitacionDAO->modificarEstado($idHabitacion, 0, 1);

            if($resultado){
                echo 'Check Out realizado exitosamente! ';
            }else{
                echo 'Ha ocurrido un error!';
            }

        }
    }
?>