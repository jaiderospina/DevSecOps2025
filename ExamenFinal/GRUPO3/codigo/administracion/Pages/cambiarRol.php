<?php 
    require '../../includes/requeriments_administracion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_id = $_POST['user_id'];
        $new_role = $_POST['new_role'];
        
        $rolDAO = new RolDAO();
        $rol_id = $rolDAO->get_rol_id(new Rol($new_role));

        $usuarioDAO = new UsuarioDAO();
        $resultado = $usuarioDAO->cambiar_rol($user_id, $rol_id);
        
        if ($resultado) {
            echo 'Rol cambiado con exito!';
        }else{
            echo 'Ha ocurrido un error';
        }

    }
?>