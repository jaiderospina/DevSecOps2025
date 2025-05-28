<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['tipo_habitacion']) && isset($_POST['precio_dia']) && isset($_POST['precio_noche'])) {
            $numeroHabitacion = $_POST['numero_habitacion']; 
            $tipo_habitacion = $_POST['tipo_habitacion'];
            $precio_dia = $_POST['precio_dia'];
            $precio_noche = $_POST['precio_noche'];
            $capacidad = $_POST['capacidad'];

            $habitacionDAO = new HabitacionDAO();
            $habitacion = new Habitacion($tipo_habitacion, $precio_dia, $precio_noche, $capacidad, 0, $numeroHabitacion);
            $resultado = $habitacionDAO->agregarHabitacion($habitacion);
            
            echo $resultado;

        }
    }
?>