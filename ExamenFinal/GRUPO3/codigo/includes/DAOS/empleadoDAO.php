<?php 

require 'objets/Empleado.php';

class EmpleadoDAO{

    private ConexionBD $db;

    function __construct(){
        $this->db = new ConexionBD();

    }

    function registrar_empleado(Empleado $empleado){

        $nombre = $empleado->getNom();
        $id_usuario = $empleado->getIdUsuario();

        $nombre = mysqli_real_escape_string($this->db->conexion(), $nombre);
    
        $query = "INSERT INTO empleado (nombre, id_usuario) VALUES ('$nombre', $id_usuario)";
    
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            echo "<script>alert('Registrado con éxito');</script>";
        } else {
            echo "<script>alert('Error en el registro');</script>";
        }
    
        $this->db->close();
    }    

}

?>