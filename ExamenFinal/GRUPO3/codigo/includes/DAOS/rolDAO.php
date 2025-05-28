<?php 

require 'objets/Rol.php';
require 'parametrosDAO.php';

class RolDAO {

    private ConexionBD $db;

    function __construct() {
        $this->db = new ConexionBD();
    }

    function get_rol_id(Rol $rol) {
        $nombreRol = $rol->get_rol();

        if (!isset($nombreRol) || trim($nombreRol) === '') {
            throw new Exception("El nombre del rol no puede estar vacío o null.");
        }

        $conexion = $this->db->conexion();
        $rolEscapado = mysqli_real_escape_string($conexion, $nombreRol);

        $query = "SELECT rol_id FROM rol WHERE nombre='$rolEscapado'";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $this->db->close();
            return $fila['rol_id'];
        } else {
            $queryInsert = "INSERT INTO rol (nombre) VALUES ('$rolEscapado')";
            $subida = mysqli_query($conexion, $queryInsert);

            if ($subida) {
                $query = "SELECT rol_id FROM rol WHERE nombre='$rolEscapado'";
                $resultado = mysqli_query($conexion, $query);

                if ($resultado) {
                    $fila = mysqli_fetch_assoc($resultado);
                    $rol_id = $fila['rol_id'];

                    $parametrosDAO = new ParametrosDAO();
                    $parametrosDAO->registrarParametroSalario($rol_id, 0);

                    $this->db->close();
                    return $rol_id;
                }
            }

            $this->db->close();
            return null;
        }
    }

    // Nuevo método agregado para obtener rol_id desde nombre de rol
    function getRolIdPorNombre(string $nombreRol): ?int {
        if (!isset($nombreRol) || trim($nombreRol) === '') {
            throw new Exception("El nombre del rol no puede estar vacío o null.");
        }

        $conexion = $this->db->conexion();
        $rolEscapado = mysqli_real_escape_string($conexion, $nombreRol);

        $query = "SELECT rol_id FROM rol WHERE nombre='$rolEscapado' LIMIT 1";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $this->db->close();
            return (int)$fila['rol_id'];
        } else {
            $this->db->close();
            return null;
        }
    }

    function getNombrePorRolId($id) {
        if (!isset($id) || !is_numeric($id)) {
            throw new Exception("ID de rol inválido.");
        }

        $id = intval($id);
        $conexion = $this->db->conexion();

        $query = "SELECT nombre FROM rol WHERE rol_id=$id";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $this->db->close();
            return $fila['nombre'];
        } else {
            $this->db->close();
            return null; 
        }
    }

    function obtenerCargosYSalarios() {
        $conexion = $this->db->conexion();
        $query = "SELECT rol_id, nombre FROM rol";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            $cargos = array();

            while ($fila = mysqli_fetch_assoc($resultado)) {
                $rol_id = $fila['rol_id'];
                $nombre = $fila['nombre'];

                $parametrosDAO = new ParametrosDAO();
                $salario = $parametrosDAO->obtenerSalarioPorRolId($rol_id);

                $cargos[] = array(
                    'cargo' => $nombre,
                    'salario' => $salario
                );
            }

            $this->db->close();
            return $cargos;
        } else {
            $this->db->close();
            return null;
        }
    }
}

?>
