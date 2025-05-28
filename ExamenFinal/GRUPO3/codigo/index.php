<?php 

require 'includes/requeriments_ingreso.php';

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: login.php');
    exit();
}else{
    header('Location: home.php'); 
    exit();
}
