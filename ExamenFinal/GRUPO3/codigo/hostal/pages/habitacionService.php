<?php 

require '../../includes/requeriments_hospedaje.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["id_habitacion"])){
        $idHabitacion = $_POST["id_habitacion"];

        $habitacionDAO = new HabitacionDAO();
        $habitacion = $habitacionDAO->obtenerHabitacionPorId($idHabitacion);

        $respuesta = new stdClass();
        $respuesta->capacidad = "Habitacion #". $idHabitacion. " para ".$habitacion->getCapacidad(). " personas";
        $respuesta->habitacion = $habitacion->getTipoHabitacion();

        echo json_encode($respuesta);
    }else{
        echo "Habitacion no seleccionada";
    }
}

?>