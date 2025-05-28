<?php 

require 'objets/Inventario.php';

class InventarioDAO {

    private $db;

    function __construct() {
        $this->db = new ConexionBD();
    }

    public function registrar_inventario(Inventario $inventario) {
        $idUsuario = $inventario->getIdUsuario();
        $idProducto = $inventario->getIdProducto();
        $fecha = $inventario->getFecha();
        $cantidad = $inventario->getCantidad();
    
        $query = "INSERT INTO inventario (id_usuario, id_producto, fecha, cantidad) VALUES (?, ?, ?, ?)";
    
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("iisi", $idUsuario, $idProducto, $fecha, $cantidad);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

}

?>