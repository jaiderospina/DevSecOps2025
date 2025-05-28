<?php 
     require '../../includes/requeriments_hospedaje.php';

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         if (isset($_POST['data'])) {
            $stringData = $_POST['data'];
            $data = explode(",", $stringData);

            $reservaDao = new ReservaDAO();
            $reserva = $reservaDao->buscar_reserva_por_num_habitacion($data[0]);

            $checkDAO = new CheckDAO();
            $check = new Check(date('Y-m-d'), $reserva->getID());

            $habitacionDAO = new HabitacionDAO();
            $habitacionDAO->modificarDisponibilidad($data[0], 1);

            $resultado = $checkDAO->registrarCheckOut($check);

            if($resultado){
                echo "Check Out exitoso, Habitacion disponible #". $data[0];
            }else{
                echo "Ha ocurrido un error";
            }

         }
     }
?>