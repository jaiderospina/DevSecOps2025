<?php
class ConexionBD {
    private $servername = "db";
    private $username = "root";
    private $password = "root";
    private $database = "casa_del_cafe";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            $this->registrarError("Error en la conexión a la base de datos: " . $this->conn->connect_error);
            die("Lo sentimos, hubo un problema en la conexión a la base de datos.");
        }
    }

    public function conexion(){
        return $this->conn;
    }

    public function close() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    private function registrarError($mensaje) {
        $fecha = date('Y-m-d H:i:s');
        file_put_contents('/var/www/html/error.log', "[$fecha] $mensaje\n", FILE_APPEND);
    }
}
?>
