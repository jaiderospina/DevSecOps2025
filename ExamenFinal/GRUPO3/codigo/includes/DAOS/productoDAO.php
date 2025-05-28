<?php 

require 'objets/Producto.php';

class ProductoDAO {

    private $db;

    function __construct() {
        $this->db = new ConexionBD();
    }

    public function registrar_producto(Producto $producto) {
        $nombre = $producto->getNom();
        $precio = $producto->getPrecio();
        $imagen = $producto->getImagen();
        $presentacion = $producto->getPresentacion();
    
        $query = "SELECT COUNT(*) FROM producto WHERE nombre = ?";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
    
        if ($count > 0) {
            return false;
        }

        $query_count = "SELECT COUNT(*) as total_productos FROM producto";
        $resultado_count = mysqli_query($this->db->conexion(), $query_count);
        
        if ($resultado_count) {
            $fila = mysqli_fetch_assoc($resultado_count);
            $id_producto = $fila['total_productos'] + 1;
        } else {
            return false;
        }
    
        $insertQuery = "INSERT INTO producto (id_producto, nombre, precio, imagen, presentacion, cantidad) VALUES ($id_producto, ?, ?, ?, ?, 0)";
        $insertStmt = $this->db->conexion()->prepare($insertQuery);
        $insertStmt->bind_param("sdss", $nombre, $precio, $imagen, $presentacion);        
    
        if ($insertStmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    
    
    


    function obtener_productos_disponibles() {
        $productos = array();

        $query = "SELECT * FROM producto WHERE cantidad > 0";

        $result = $this->db->conexion()->query($query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $producto = new Producto($row['nombre'], $row['precio'], $row['imagen'], $row['presentacion'], $row['cantidad'], $row['id_producto']);
                $productos[] = $producto;
            }

            $result->free();
        }

        return $productos;
    }

    function obtener_productos() {
        $productos = array();

        $query = "SELECT * FROM producto";

        $result = $this->db->conexion()->query($query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $producto = new Producto($row['nombre'], $row['precio'], $row['imagen'], $row['presentacion'], $row['cantidad'], $row['id_producto']);
                $productos[] = $producto;
            }

            $result->free();
        }

        return $productos;
    }


    function obtener_producto_por_id($id) {
        $query = "SELECT * FROM producto WHERE id_producto = ?";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                return new Producto($row['nombre'], $row['precio'], $row['imagen'], $row['presentacion'], $row['cantidad'], $row['id_producto']);
            }
        }
        
        return null; 
    }


    public function actualizar_cantidad($idProducto, $cantidad) {
        $query = "UPDATE producto SET cantidad = cantidad + ? WHERE id_producto = ?";
        
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("ii", $cantidad, $idProducto);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function obtener_cantidad_por_id($id) {
        $query = "SELECT cantidad FROM producto WHERE id_producto = ?";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                return $row['cantidad'];
            }
        }
        
        return null; 
    }
    
    public function actualizar_producto($idProducto, $nuevoPrecio, $nuevaCantidad) {
        $query = "SELECT COUNT(*) FROM producto WHERE id_producto = ?";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("i", $idProducto);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
    
        if ($count == 0) {
            return false;
        }
    
        // El producto existe, proceder a actualizar el precio y la cantidad
        $updateQuery = "UPDATE producto SET precio = ?, cantidad = ? WHERE id_producto = ?";
        $updateStmt = $this->db->conexion()->prepare($updateQuery);
        $updateStmt->bind_param("dii", $nuevoPrecio, $nuevaCantidad, $idProducto);
    
        if ($updateStmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    

}


?>