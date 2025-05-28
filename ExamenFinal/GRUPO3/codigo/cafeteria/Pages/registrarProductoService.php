<?php
require '../../includes/requeriments_cafeteria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $presentacion = $_POST['presentacion'];

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagenData = file_get_contents($_FILES['imagen']['tmp_name']);
        
        $producto = new Producto($nombre, $precio, $imagenData, $presentacion);

        $productoDAO = new ProductoDAO();

        $resultado = $productoDAO->registrar_producto($producto);

        if ($resultado) {
            echo 'Producto registrado exitosamente!';
        } else {
            echo 'Ha ocurrido un error!';
        }
    } else {
        echo 'Error al cargar la imagen.';
    }
}
?>
