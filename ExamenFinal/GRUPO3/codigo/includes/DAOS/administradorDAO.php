<?php 

require 'objets/Administrador.php';

class AdministradorDAO{

    private ConexionBD $db;


    function __construct(){
        $this->db = new ConexionBD();

    }

    function registrar_administrador(Administrador $administrador){

        $nombre = $administrador->get_nombre();
        $id_usuario = $administrador->get_id_usuario();

        $nombre = mysqli_real_escape_string($this->db->conexion(), $nombre);
    
        $query = "INSERT INTO administrador (nombre, id_usuario) VALUES ('$nombre', $id_usuario)";
    
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