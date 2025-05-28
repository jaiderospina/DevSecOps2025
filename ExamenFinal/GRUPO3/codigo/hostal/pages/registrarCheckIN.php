<?php
    session_start();
    require '../../includes/requeriments_hospedaje.php';

    if (!isset($_SESSION['id_usuario'])) {
        header('Location: ../../login.php');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_destroy();
        header('Location: ../../login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Check In</title>
    <link rel="stylesheet" href="../../css/hotas_registrar.css">
</head>
<body>
<div class="sidebar">
        <img class="image-logo"
         src="data:image/png;base64,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"
         alt="Casa del Café">
         <a href="../index.php">Ir al menú principal</a>
        <a href="verCliente.php">Ver Clientes</a>
        <a href="habitaciones.php">Ver Habitaciones</a>
        <a href="verReservas.php">Ver Reservas</a>
        <a href="registroIngresos.php">Registro de Ingresos</a>
        <form action="registrarCheckIN.php" method="POST">
            <input type="submit" value="Cerrar Sesión" formnovalidate>
        </form>
    </div>
    <div class="content">
        <h1><a class="back-link" href="habitaciones.php">&lt;Volver</a> Check In</h1>
        
        <form class="formRegistro">
            <label for="id_reserva">Id de la reserva:</label>
            <select name="id_reserva" id="id_reserva" required>
            <?php 
                $reservasDAO = new ReservaDAO();
                $reservas = $reservasDAO->obtener_reservas_sin_checkin();
                foreach ($reservas as $reserva) {
                    echo "<option value='". $reserva->getID() . "'>Reserva #". $reserva->getID(). ": ". $reserva->getTipoHabitacion(). " #". $reserva->getNumeroHabitacion(). "</option>";
                }
            ?>
            </select>

            <input class="registroSumbit" type="submit" value="Check IN">
        </form>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var formularioCheckIn = document.querySelector(".formRegistro");
        formularioCheckIn.addEventListener("submit", function(event) {
            event.preventDefault();

            var idReserva = document.getElementById("id_reserva").value;

            var formData = new FormData();
            formData.append("id_reserva", idReserva);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "checkin.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
                    window.location.reload();
                }
            };
            xhr.send(formData);
        });
    });
</script>

</html>
