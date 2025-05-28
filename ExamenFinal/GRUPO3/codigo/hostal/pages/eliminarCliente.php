<?php 
    require '../../includes/requeriments_hospedaje.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['idCliente'])) {
            $id = $_POST['idCliente'];
            
            $clienteDAO = new clienteDAO();

            $resultado = $clienteDAO->eliminarCliente($id);
            
            if($resultado){
                echo 'Cliente eliminado exitosamente!';
            }else{
                echo 'Ha ocurrido un error!';
            }

        }
    }
?>