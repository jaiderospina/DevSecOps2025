<?php 

require 'objets/Usuario.php';

class UsuarioDAO {

    private $last_id;
    private ConexionBD $db;

    public function __construct(){
        $this->db = new ConexionBD();
    }

    public function registrar_usuario(Usuario $usuario) {
        $nombre = $usuario->get_nombre();
        $apellido = $usuario->get_apellido();
        $rol = $usuario->get_rol();
        $email = $usuario->get_email();
        $contraseña = $usuario->get_contraseña();
    
        $nombre = mysqli_real_escape_string($this->db->conexion(), $nombre);
        $apellido = mysqli_real_escape_string($this->db->conexion(), $apellido);
        $email = mysqli_real_escape_string($this->db->conexion(), $email);
        $contraseña = mysqli_real_escape_string($this->db->conexion(), $contraseña);
    
        $verificar_query = "SELECT COUNT(*) as count FROM usuario WHERE email = '$email'";
        $verificar_resultado = mysqli_query($this->db->conexion(), $verificar_query);
        $verificar_fila = mysqli_fetch_assoc($verificar_resultado);
        $num_registros = $verificar_fila['count'];
    
        if ($num_registros > 0) {
            echo "<script>alert('El email ya ha sido registrado. Por favor, utiliza otro email.');</script>";
        } else {
            $query = "INSERT INTO usuario (nombre, apellido, rol_id, email, contraseña, estado) VALUES ('$nombre', '$apellido', $rol, '$email', '$contraseña', 1)";
            $resultado = mysqli_query($this->db->conexion(), $query);
    
            if ($resultado) {
                $this->last_id = mysqli_insert_id($this->db->conexion());
                echo "<script>alert('Registrado con éxito');</script>";
            } else {
                echo "<script>alert('Error en el registro');</script>";
            }
        }
    
        $this->db->close();
    
        return $this->last_id;
    }
    
    public function iniciar_sesion($correo, $contrasena) {
        $correo = mysqli_real_escape_string($this->db->conexion(), $correo);
        $contrasena = mysqli_real_escape_string($this->db->conexion(), $contrasena);
    
        $query = "SELECT nombre, id_usuario, rol_id, estado FROM usuario WHERE email = '$correo' AND contraseña = '$contrasena'";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            if($fila['estado'] == 1){
                return [$fila['id_usuario'], $fila['rol_id'], $fila['nombre']]; 
            }else{
                return ['Usuario suspendido', 'Usuario suspendido', 'nombre'];
            }
        } else {
            return null;
        }
    }

    public function obtener_todos_usuarios() {
        $usuarios = array();
        $query = "SELECT * FROM usuario";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $rolDAO = new RolDAO();
                
                $user_id = $fila["id_usuario"];
                $nombre = $fila['nombre'];
                $apellido = $fila['apellido'];
                $rol_id = $fila['rol_id'];
                $email = $fila['email'];
                $contrasena = $fila['contraseña'];
                $estado = $fila['estado'];

                $nombre_rol = ($rol_id !== null) ? $rolDAO->getNombrePorRolId($rol_id) : "Rol no asignado";
                $rol = new Rol($nombre_rol);

                $usuario = new Usuario($nombre, $apellido, $rol, $email, $contrasena, $estado);
                $usuario->set_user_id($user_id);
                $usuarios[] = $usuario;
            }
        }
    
        return $usuarios;
    }

    public function obtener_usuarios_por_nombre($nombre) {
        $usuarios = array();
        $query = "SELECT * FROM usuario WHERE nombre LIKE ?";
        $stmt = mysqli_prepare($this->db->conexion(), $query);
        
        if($stmt){
            $nombreParam = $nombre . "%";
            mysqli_stmt_bind_param($stmt, "s", $nombreParam);
            mysqli_stmt_execute($stmt);

            $resultado = mysqli_stmt_get_result($stmt);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $rolDAO = new RolDAO();
                    
                    $user_id = $fila["id_usuario"];
                    $nombre = $fila['nombre'];
                    $apellido = $fila['apellido'];
                    $rol_id = $fila['rol_id'];
                    $email = $fila['email'];
                    $contrasena = $fila['contraseña'];
                    $estado = $fila['estado'];

                    $nombre_rol = ($rol_id !== null) ? $rolDAO->getNombrePorRolId($rol_id) : "Rol no asignado";
                    $rol = new Rol($nombre_rol);

                    $usuario = new Usuario($nombre, $apellido, $rol, $email, $contrasena, $estado);
                    $usuario->set_user_id($user_id);
                    $usuarios[] = $usuario;
                }
            }
        
            return $usuarios;
        } else {
            return null;
        }
    }

    public function buscar_usuario_por_id($usuario_id) {        
        $query = "SELECT * FROM usuario WHERE id_usuario = $usuario_id";
        $resultado = mysqli_query($this->db->conexion(), $query);
        
        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $rolDAO = new RolDAO();
            $nombre = $fila['nombre'];
            $apellido = $fila['apellido'];
            $rol_id = $fila['rol_id'];
            $email = $fila['email'];
            $contrasena = $fila['contraseña'];
            $estado = $fila['estado'];

            $nombre_rol = ($rol_id !== null) ? $rolDAO->getNombrePorRolId($rol_id) : "Rol no asignado";
            $rol = new Rol($nombre_rol);

            $usuario = new Usuario($nombre, $apellido, $rol, $email, $contrasena, $estado);
            $usuario->set_user_id($usuario_id);
            
            return $usuario;
        } else {
            return null;
        }
    }

    public function cambiar_rol($usuario_id, $nuevo_rol_id) {
        $usuario_existente = $this->buscar_usuario_por_id($usuario_id);
    
        if ($usuario_existente) {
            $query = "UPDATE usuario SET rol_id = ? WHERE id_usuario = ?";
            $stmt = mysqli_prepare($this->db->conexion(), $query);
    
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ii", $nuevo_rol_id, $usuario_id);
                $resultado = mysqli_stmt_execute($stmt);
    
                if ($resultado) {
                    mysqli_stmt_close($stmt);
                    return true;
                }
            }
        }
        
        return false;
    }
    
    public function actualizar_usuario($usuario_id, $nombre, $apellido, $rol_id, $email, $contrasena) {        
        $query = "SELECT COUNT(*) as count FROM usuario WHERE email = '$email' AND id_usuario <> $usuario_id";
        $verificar_resultado = mysqli_query($this->db->conexion(), $query);
        $verificar_fila = mysqli_fetch_assoc($verificar_resultado);
        $num_registros = $verificar_fila['count'];
        
        if ($num_registros > 0) {
            return false; 
        } else {
            $nombre = mysqli_real_escape_string($this->db->conexion(), $nombre);
            $apellido = mysqli_real_escape_string($this->db->conexion(), $apellido);
            $email = mysqli_real_escape_string($this->db->conexion(), $email);
            $contrasena = mysqli_real_escape_string($this->db->conexion(), $contrasena);
            
            $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', rol_id = $rol_id, email = '$email', contraseña = '$contrasena' WHERE id_usuario = $usuario_id";
            $resultado = mysqli_query($this->db->conexion(), $query);
    
            return $resultado ? true : false;
        }
    }

    public function eliminar_usuario_por_id($usuario_id) {
        $usuario_existente = $this->buscar_usuario_por_id($usuario_id);
    
        if ($usuario_existente) {
            $query = "DELETE FROM usuario WHERE id_usuario = $usuario_id";
            $resultado = mysqli_query($this->db->conexion(), $query);
            return $resultado ? true : false;
        } else {
            return false;
        }
    }
    
    public function cambiar_estado($id_usuario, $nuevo_estado) {
        $id_usuario = mysqli_real_escape_string($this->db->conexion(), $id_usuario);
        $nuevo_estado = mysqli_real_escape_string($this->db->conexion(), $nuevo_estado);
    
        $query = "UPDATE usuario SET estado = $nuevo_estado WHERE id_usuario = $id_usuario";
        $resultado = mysqli_query($this->db->conexion(), $query);
    
        return $resultado ? true : false;
    }    

    public function actualizar_correo_y_nombre_por_id($usuario_id, $nuevo_nombre, $nuevo_apellido, $nuevo_correo) {
        $usuario_existente = $this->buscar_usuario_por_id($usuario_id);
    
        if ($usuario_existente) {
            $nuevo_nombre = mysqli_real_escape_string($this->db->conexion(), $nuevo_nombre);
            $nuevo_apellido = mysqli_real_escape_string($this->db->conexion(), $nuevo_apellido);
            $nuevo_correo = mysqli_real_escape_string($this->db->conexion(), $nuevo_correo);
    
            $query = "UPDATE usuario SET nombre = '$nuevo_nombre', apellido = '$nuevo_apellido', email = '$nuevo_correo' WHERE id_usuario = $usuario_id";
            $resultado = mysqli_query($this->db->conexion(), $query);
    
            return $resultado ? true : false;
        }
        
        return false;
    }
}

?>
