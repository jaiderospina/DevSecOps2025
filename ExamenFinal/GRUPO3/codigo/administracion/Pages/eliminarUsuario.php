<?php 
require '../../includes/requeriments_administracion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        $usuarioDAO = new UsuarioDAO();
        $exito = $usuarioDAO->eliminar_usuario_por_id($user_id);

        if ($exito) {
            echo "Usuario eliminado con exito";
        } else {
            echo "Error al eliminar el usuario";
        }
    } else {
        echo "ID de usuario no especificado";
    }
}

?>