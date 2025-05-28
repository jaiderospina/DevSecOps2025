<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['nombre']) && isset($_POST['email'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $ubicacion = $_POST['ubicacion'];
            $numero = $_POST['numero'];
            
            $clienteDAO = new clienteDAO();

            $resultado = $clienteDAO->registrarCliente(new Cliente($nombre, $email, $ubicacion, $numero));
            
            if($resultado){
                echo 'Cliente registrado exitosamente!';
            }else{
                echo 'Ha ocurrido un error!';
            }

        }
    }
?>