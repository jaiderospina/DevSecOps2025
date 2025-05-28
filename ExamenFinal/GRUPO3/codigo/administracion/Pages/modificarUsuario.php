<?php 
    require '../../includes/requeriments_administracion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userID = $_POST['userID'];
        $nombre = $_POST['newNombre'];
        $apellido = $_POST['newApellido'];
        $correo = $_POST['newCorreo'];
        
        $usuarioDAO = new UsuarioDAO();
        $resultado = $usuarioDAO->actualizar_correo_y_nombre_por_id($userID,$nombre, $apellido, $correo);
        if ($resultado) {
            echo 'Usuario actualizado con exito!';
        } else {
            echo 'Ha ocurrido un error!';
        }
    }
?>