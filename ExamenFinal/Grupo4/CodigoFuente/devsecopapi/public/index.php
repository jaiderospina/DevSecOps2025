<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>LAMP con Docker</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">

    <h1>Usuarios del sistema</h1>

    <?php
    $conn = mysqli_connect('db','root','root.pa55', 'db_ejm1');

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Agregar usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
        $producto = mysqli_real_escape_string($conn, $_POST['producto']);
        $valor = floatval($_POST['valor']);

        if (!empty($nombre) && !empty($cedula) && !empty($producto) && $valor > 0) {
            $sql = "INSERT INTO Usuarios (nombre, cedula, producto, valor) VALUES ('$nombre', '$cedula', '$producto', $valor)";
            mysqli_query($conn, $sql);
        }
    }

    // Eliminar usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $id = intval($_POST['id']);
        $sql = "DELETE FROM Usuarios WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    // Modificar producto y valor
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $id = intval($_POST['id']);
        $nuevo_producto = mysqli_real_escape_string($conn, $_POST['producto']);
        $nuevo_valor = floatval($_POST['valor']);

        if ($id > 0 && !empty($nuevo_producto) && $nuevo_valor > 0) {
            $sql = "UPDATE Usuarios SET producto = '$nuevo_producto', valor = $nuevo_valor WHERE id = $id";
            mysqli_query($conn, $sql);
        }
    }

    // Mostrar tabla
    $query = 'SELECT * FROM Usuarios';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped mt-4">';
    echo '<thead><tr><th>ID</th><th>Nombre</th><th>Cédula</th><th>Producto</th><th>Valor</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td>'.htmlspecialchars($value['id']).'</td>';
        echo '<td>'.htmlspecialchars($value['nombre']).'</td>';
        echo '<td>'.htmlspecialchars($value['cedula']).'</td>';
        echo '<td>'.htmlspecialchars($value['producto']).'</td>';
        echo '<td>'.htmlspecialchars($value['valor']).'</td>';
        echo '</tr>';
    }
    echo '</table>';
    $result->close();
    mysqli_close($conn);
    ?>

    <h3 class="mt-4">Agregar Usuario</h3>
    <form method="POST" class="mb-3">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula:</label>
            <input type="text" class="form-control" id="cedula" name="cedula" required>
        </div>
        <div class="mb-3">
            <label for="producto" class="form-label">Producto:</label>
            <input type="text" class="form-control" id="producto" name="producto" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
        </div>
        <button type="submit" name="add" class="btn btn-success">Agregar</button>
    </form>

    <h3>Eliminar Usuario</h3>
    <form method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">ID del usuario a eliminar:</label>
            <input type="number" class="form-control" id="id" name="id" required>
        </div>
        <button type="submit" name="delete" class="btn btn-danger">Eliminar</button>
    </form>

    <h3>Modificar Producto y Valor</h3>
    <form method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">ID del usuario a modificar:</label>
            <input type="number" class="form-control" id="id" name="id" required>
        </div>
        <div class="mb-3">
            <label for="producto" class="form-label">Nuevo Producto:</label>
            <input type="text" class="form-control" id="producto" name="producto" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Nuevo Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Modificar</button>
    </form>
    <form method="POST" action="logout.php">
        <button type="submit" class="btn btn-secondary mt-3">Cerrar sesión</button>
    </form>
</div>
</body>
</html>
