<?php 

require 'objets/Venta.php';

class VentaDAO {

    private $db;

    public function __construct(){
        $this->db = new ConexionBD(); 
    }

    public function registrar_venta(Venta $venta) {
        $id_producto = $venta->get_id_producto();
        $fecha = $venta->get_fecha();
        $cantidad = $venta->get_cantidad();

        $id_producto = mysqli_real_escape_string($this->db->conexion(), $id_producto);
        $fecha = mysqli_real_escape_string($this->db->conexion(), $fecha);
        $cantidad = mysqli_real_escape_string($this->db->conexion(), $cantidad);

        $query = "INSERT INTO ventas (id_producto, fecha, cantidad) VALUES ('$id_producto', '$fecha', $cantidad)";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function modificar_venta($id_venta, $id_producto, $fecha, $cantidad) {
        $id_producto = mysqli_real_escape_string($this->db->conexion(), $id_producto);
        $fecha = mysqli_real_escape_string($this->db->conexion(), $fecha);
        $cantidad = mysqli_real_escape_string($this->db->conexion(), $cantidad);

        $query = "UPDATE ventas SET id_producto = '$id_producto', fecha = '$fecha', cantidad = $cantidad WHERE id_venta = $id_venta";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminar_venta($id_venta) {
        $query = "DELETE FROM ventas WHERE id_venta = $id_venta";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function obtener_todas_ventas() {
        $ventas = array();

        $query = "SELECT * FROM ventas";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $id_venta = $fila["id_venta"];
                $id_producto = $fila['id_producto'];
                $fecha = $fila['fecha'];
                $cantidad = $fila['cantidad'];
                $venta = new Venta($id_producto, $fecha, $cantidad, $id_venta);
                $ventas[] = $venta;
            }
        }

        return $ventas;
    }

    public function obtener_venta_por_id($id_venta) {
        $query = "SELECT * FROM ventas WHERE id_venta = $id_venta";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $id_producto = $fila['id_producto'];
            $fecha = $fila['fecha'];
            $cantidad = $fila['cantidad'];

            $venta = new Venta($id_producto, $fecha, $cantidad, $id_venta);
            return $venta;
        } else {
            return null;
        }
    }

    public function obtener_ingresos_por_semana() {
        $ingresosPorSemana = array();
    
        $query = "SELECT YEAR(fecha) AS anio, WEEK(fecha) AS semana, SUM(producto.precio * ventas.cantidad) AS ingresos
                  FROM ventas
                  INNER JOIN producto ON ventas.id_producto = producto.id_producto
                  GROUP BY anio, semana
                  ORDER BY anio, semana";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $semana = $fila["semana"];
                $ingresos = $fila["ingresos"];
                $ingresosPorSemana[] = array("semana" => $semana, "ingresos" => $ingresos);
            }
        }
    
        return $ingresosPorSemana;
    }
    
    public function obtenerIngresosMesActual() {
        $ingresosMesActual = 0;
        $anioActual = date("Y");
        $mesActual = date("m");
    
        $query = "SELECT SUM(producto.precio * ventas.cantidad) AS ingresos
                  FROM ventas
                  INNER JOIN producto ON ventas.id_producto = producto.id_producto
                  WHERE YEAR(ventas.fecha) = $anioActual AND MONTH(ventas.fecha) = $mesActual";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            $fila = mysqli_fetch_assoc($resultado);
            $ingresosMesActual = $fila["ingresos"] ?? 0;
        }
    
        return $ingresosMesActual;
    }
    
    public function obtenerIngresosAnioActual() {
        $ingresosAnioActual = 0;
        $anioActual = date("Y");
    
        $query = "SELECT SUM(producto.precio * ventas.cantidad) AS ingresos
                  FROM ventas
                  INNER JOIN producto ON ventas.id_producto = producto.id_producto
                  WHERE YEAR(ventas.fecha) = $anioActual";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            $fila = mysqli_fetch_assoc($resultado);
            $ingresosAnioActual = $fila["ingresos"] ?? 0; 
        }
    
        return $ingresosAnioActual;
    }
    


}


?>