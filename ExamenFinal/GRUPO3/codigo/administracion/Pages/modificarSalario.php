<?php 

require '../../includes/requeriments_administracion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    
    $rolDAO = new RolDAO();
    $rol_id = $rolDAO->get_rol_id(new Rol($cargo));

    $parametrosDAO = new ParametrosDAO();
    $resultado = $parametrosDAO->modificarSalarioPorRolId($rol_id, $salario);

    if ($resultado) {
        echo 'Salario modificado con exito!';
    }else{
        echo 'Ha ocurrido un error!';
    }

}

?>