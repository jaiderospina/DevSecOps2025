<?php 

require 'objets/Coordinador.php';

class CoordinadorDAO {

    private ConexionBD $db;

    public function __construct() {
        $this->db = new ConexionBD();
    }

    public function registrar_coordinador(Coordinador $coordinador): bool {
        $nombre = $coordinador->getNom();
        $id_usuario = $coordinador->getIdUsuario();

        $nombre = mysqli_real_escape_string($this->db->conexion(), $nombre);

        $query = "INSERT INTO coordinador (nombre, id_usuario) VALUES ('$nombre', $id_usuario)";

        $resultado = mysqli_query($this->db->conexion(), $query);

        $this->db->close();

        return $resultado ? true : false;
    }
}
?>

