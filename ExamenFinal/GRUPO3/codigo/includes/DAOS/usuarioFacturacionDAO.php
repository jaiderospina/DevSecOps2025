<?php 

require 'objets/Usuario_Facturacion.php';

class UsuarioFacturacionDAO{

    private ConexionBD $conexionBD;

    function __construct(){
        $this->conexionBD = new ConexionBD();
    }

}

?>