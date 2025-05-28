<?php 
require '../../includes/requeriments_cafeteria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];
    $fechaActual = date('Y-m-d');
    $idUsuario = $_SESSION['id_usuario'];

    $productoDAO = new ProductoDAO();
    $inventarioDAO = new InventarioDAO();

    $inventario = new Inventario($idUsuario, $idProducto, $fechaActual, $cantidad);
    $resultado = $inventarioDAO->registrar_inventario($inventario);

    $resultado = $productoDAO->actualizar_cantidad($idProducto, $cantidad);

    if ($resultado) {
        echo 'Inventario añadido exitosamente!';
    } else {
        echo 'Ha ocurrido un error!';
    }
}
?>
