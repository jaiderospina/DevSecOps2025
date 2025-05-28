<?php 
require '../../includes/requeriments_cafeteria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];
    $fechaActual = date('Y-m-d');
    $idUsuario = $_SESSION['id_usuario'];
    $datetime_actual = date('Y-m-d H:i:s');

    $productoDAO = new ProductoDAO();
    $historialDAO = new historialDAO();
    $cantidadDisponible = $productoDAO->obtener_cantidad_por_id($idProducto);

    if($cantidadDisponible >= $cantidad){;
        $ventaDAO = new VentaDAO();
        $venta = new Venta($idProducto, $fechaActual, $cantidad);
        $resultadoVenta = $ventaDAO->registrar_venta($venta);
        if($resultadoVenta){
            $resultado = $productoDAO->actualizar_cantidad($idProducto, $cantidad * -1);
            $resultadoHistorial = $historialDAO->registrarHistorialVentas(new Historial($datetime_actual, "Venta de: " . $productoDAO->obtener_producto_por_id($idProducto)->getNom(). " por ". $cantidad. " unidades", $idProducto));

            if ($resultado) {
                echo 'Venta registrada exitosamente!';
            } else {
                echo 'Ha ocurrido un error!';
            }
        }else{
            echo 'Ha ocurrido un error en la venta';
        }
    }else{
        echo "No hay disponibilidad del producto para realizar la venta";
    }
}
?>
