<?php 
require '../../includes/requeriments_cafeteria.php';

function convertirAFloat($valor) {
    $valor = str_replace('$', '', $valor);
    $valor = str_replace(' ', '', $valor);
    $valor = str_replace('.', '', $valor);
    $floatValue = (float) $valor;
    return $floatValue;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precioProducto'];
    $precioNuevo = convertirAFloat($precio);

    $productoDAO = new ProductoDAO();

    $resultado = $productoDAO->actualizar_producto($idProducto, $precioNuevo, $cantidad);

    if ($resultado) {
        echo 'Inventario añadido exitosamente!';
    } else {
        echo 'Ha ocurrido un error!';
    }
}