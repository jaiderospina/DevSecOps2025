<?php 
    require '../../includes/requeriments_administracion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_id = $_POST['user_id'];
        $new_estado = $_POST['new_estado'];

        $usuarioDAO = new UsuarioDAO();
        $resultado = $usuarioDAO->cambiar_estado( $user_id, $new_estado);
        
        if ($resultado) {
            echo 'Estado cambiado con exito!';
        }else{
            echo 'Ha ocurrido un error';
        }

    }
?>