<?php 
     require '../../includes/requeriments_hospedaje.php';

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         if (isset($_POST['data'])) {
            $stringData = $_POST['data'];
            $data = explode(",", $stringData);

            $habitacionDAO = new HabitacionDAO();
            $resultado = $habitacionDAO->eliminarHabitacion($data[0]);

            if($resultado){
                echo "Habitacion eliminada exitosamente";
            }else{
                echo "Ha ocurrido un error";
            }

         }
     }
?>