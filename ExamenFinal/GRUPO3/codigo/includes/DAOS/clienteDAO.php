<?php
require 'objets/Cliente.php';

class ClienteDAO {
    private ConexionBD $db;

    function __construct() {
        $this->db = new ConexionBD();
    }

    function registrarCliente(Cliente $cliente) {
        $query_count = "SELECT COUNT(*) as total_clientes FROM cliente";
        $resultado_count = mysqli_query($this->db->conexion(), $query_count);
        
        if ($resultado_count) {
            $fila = mysqli_fetch_assoc($resultado_count);
            $id_cliente = $fila['total_clientes'] + 1;
        } else {
            return false;
        }
    
        $nombre = mysqli_real_escape_string($this->db->conexion(), $cliente->getNombre());
        $email = mysqli_real_escape_string($this->db->conexion(), $cliente->getEmail());
        $ubicacion = mysqli_real_escape_string($this->db->conexion(), $cliente->getUbicacion());
        $numero = mysqli_real_escape_string($this->db->conexion(), $cliente->getNumero());
    
        $query = "INSERT INTO cliente (id_cliente, nombre, email, ubicacion, numero) VALUES ('$id_cliente', '$nombre', '$email', '$ubicacion', '$numero')";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    

    function modificarClientePorId($id_cliente, Cliente $cliente) {
        $nombre = mysqli_real_escape_string($this->db->conexion(), $cliente->getNombre());
        $email = mysqli_real_escape_string($this->db->conexion(), $cliente->getEmail());
        $ubicacion = mysqli_real_escape_string($this->db->conexion(), $cliente->getubicacion());
        $numero = mysqli_real_escape_string($this->db->conexion(), $cliente->getNumero());

        $query = "UPDATE cliente SET nombre = '$nombre', email = '$email', ubicacion = '$ubicacion', numero = '$numero' WHERE id_cliente = $id_cliente";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }


    function modificarCliente($id_cliente, $nombre, $correo) {
        $nombre = mysqli_real_escape_string($this->db->conexion(), $nombre);
        $email = mysqli_real_escape_string($this->db->conexion(), $correo);

        $query = "UPDATE cliente SET nombre = '$nombre', email = '$email'  WHERE id_cliente = $id_cliente";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    function obtenerClientePorId($id_cliente) {
        $id_cliente = mysqli_real_escape_string($this->db->conexion(), $id_cliente);

        $query = "SELECT * FROM cliente WHERE id_cliente = $id_cliente";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $cliente = new Cliente($fila['nombre'], $fila['email'], $fila['ubicacion'], $fila['numero'], $fila['id_cliente']);
            return $cliente;
        } else {
            return null;
        }
    }

    function obtenerClientePorCorreo($email) {
        $email = mysqli_real_escape_string($this->db->conexion(), $email);

        $query = "SELECT * FROM cliente WHERE email = '$email'";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $cliente = new Cliente($fila['nombre'], $fila['email'], $fila['ubicacion'], $fila['numero'], $fila['id_cliente']);
            return $cliente;
        } else {
            return null;
        }
    }

    function eliminarCliente($id_cliente) {
        $id_cliente = mysqli_real_escape_string($this->db->conexion(), $id_cliente);

        $query = "DELETE FROM cliente WHERE id_cliente = $id_cliente";
        $resultado = mysqli_query($this->db->conexion(), $query);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    function obtenerClientes() {
        $query = "SELECT * FROM cliente";
        $result = mysqli_query($this->db->conexion(), $query);

        $clientes = array();

        if ($result) {
            while ($fila = mysqli_fetch_assoc($result)) {
                $cliente = new Cliente($fila['nombre'], $fila['email'], $fila['ubicacion'], $fila['numero'], $fila['id_cliente']);
                $clientes[] = $cliente;
            }
        }

        return $clientes;
    }

}
?>
