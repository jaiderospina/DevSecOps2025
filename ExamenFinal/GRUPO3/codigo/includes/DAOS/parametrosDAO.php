<?php 

class ParametrosDAO{

    private ConexionBD $db;

    function __construct(){
        $this->db = new ConexionBD();

    }

    public function registrarParametroSalario($rolId, $salario) {
        $query = "INSERT INTO parametros (rol_id, salario) VALUES (?, ?)";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("id", $rolId, $salario);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerSalarioPorRolId($rolId) {
        $query = "SELECT salario FROM parametros WHERE rol_id = ?";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("i", $rolId);

        if ($stmt->execute()) {
            $stmt->bind_result($salario);

            if ($stmt->fetch()) {
                return $salario;
            } else {
                return null; 
            }
        } else {
            return null;
        }
    }

    public function modificarSalarioPorRolId($rolId, $nuevoSalario) {
        $query = "UPDATE parametros SET salario = ? WHERE rol_id = ?";
        $stmt = $this->db->conexion()->prepare($query);
        $stmt->bind_param("di", $nuevoSalario, $rolId);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

?>