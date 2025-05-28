<?php 

    class Usuario {

        private $user_id;
        private $nombre;
        private $apellido;
        private Rol $rol;
        private $email;
        private $contraseña;
        private RolDAO $rolDAO;
        private $usuarioActivo;
        
        public function __construct($nombre, $apellido,  Rol $rol, $email, $contraseña, $usuarioActivo = 1){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->rol = $rol;
            $this->rolDAO = new RolDAO();
            $this->email = $email;
            $this->contraseña = $contraseña;
            $this->usuarioActivo = $usuarioActivo;
        }

        public function get_nombre(){
            return $this->nombre;
        }

        public function get_apellido(){
            return $this->apellido;
        }

        public function obtener_rol(){
            return $this->rol->get_rol();
        }

        public function get_rol(){
            return $this->rolDAO->get_rol_id($this->rol);
        }

        public function get_rol_por_id($name){
            return $this->rolDAO->getRolIdPorNombre($name);
        }

        public function set_nombre($nombre){
            $this->nombre = $nombre;
        }

        public function set_apellido($apellido){
            $this->apellido = $apellido;
        }

        public function set_rol_id($rol_id){
            $this->rol_id = $rol_id;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_contraseña(){
            return $this->contraseña;
        }

        public function obtenerAtributosSeparadosPorPipe() {
            return $this->user_id. '|' .$this->nombre . '|' . $this->apellido . '|' . $this->obtener_rol() . '|' . $this->email;
        }        

        public function set_user_id($user_id){
            $this->user_id = $user_id;
        }

        public function get_user_id(){
            return $this->user_id;
        }

        public function get_usuario_activo(){
            return $this->usuarioActivo;
        }



    }

?>