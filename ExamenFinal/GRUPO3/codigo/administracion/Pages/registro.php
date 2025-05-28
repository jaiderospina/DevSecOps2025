<?php
session_start();
require '../../includes/requeriments_registro.php';

if (!isset($_SESSION['id_usuario'])) {
    header('Location: ../../login.php');
    exit();
}else if($_SESSION['rol'] != 'administrador'){
    header('Location: ../../home.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['nombre']) and isset($_POST['apellidos']) and isset($_POST['correo']) and isset($_POST['contrasena']) and isset($_POST['rol']) ) {
        $usuarioDAO = new UsuarioDAO();

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $rol = $_POST['rol']; 

        $rol_id = new Rol($rol);
        $usuario = new Usuario($nombre, $apellidos, $rol_id, $correo, $contrasena);

        $last_id = $usuarioDAO->registrar_usuario($usuario);

        switch($rol){
            case 'administrador':
                $administradorDAO = new AdministradorDAO();
                $administrador = new Administrador($nombre, 0, $last_id);
                $administradorDAO->registrar_administrador($administrador);
            break;
            case 'coordinador':
                $coordinadorDAO = new CoordinadorDAO();
                $coordinador = new Coordinador($nombre, 0, $last_id);
                $coordinadorDAO->registrar_coordinador($coordinador);
            break;
            case 'empleado':
                $empleadoDAO = new EmpleadoDAO();
                $empleado = new Empleado($nombre, $last_id);
                $empleadoDAO->registrar_empleado($empleado);
            break;
        }

        if($last_id){
            echo "<script>alert('Usuario registrado con exito')</script>";
            header('Location: verUsuarios.php');
            exit();
        }

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../../css/administracion_registro.css">
</head>
<body>
    <div class="container">
        <h1><a class="back-link" href="verUsuarios.php">&lt;Volver</a> Registro de Usuario</h1>
        <form method="POST" action="registro.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required><br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br>
            <label for="rol">Rol:</label>
            <select id="rol" name="rol">
                <option value="administrador">Administrador</option>
                <option value="coordinador">Coordinador</option>
                <option value="empleado">Empleado</option>
            </select><br>
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>

</html>
