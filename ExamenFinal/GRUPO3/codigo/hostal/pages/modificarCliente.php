<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['idCliente'])) {
            $id = $_POST['idCliente'];
            $nombre = $_POST['nombreCliente'];
            $email = $_POST['emailCliente'];
            
            $clienteDAO = new clienteDAO();
            $resultado = $clienteDAO->modificarCliente($id, $nombre, $email);
            
            if($resultado){
                echo 'Cliente modificado exitosamente!';
            }else{
                echo 'Ha ocurrido un error!';
            }

        }
    }
?>