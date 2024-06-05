<?php
include('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM motos WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("Error: No se encontró la moto con ID $id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Editar Información</title>
</head>
<body>
    <div>
        <form action="edit_moto.php" method="POST">
            <h1>Editar Moto</h1>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <input type="text" name="marca" placeholder="Marca" value="<?php echo htmlspecialchars($row['marca']); ?>">
            <input type="text" name="modelo" placeholder="Modelo" value="<?php echo htmlspecialchars($row['modelo']); ?>">
            <input type="text" name="anio" placeholder="Año" value="<?php echo htmlspecialchars($row['anio']); ?>">
            <input type="text" name="precio" placeholder="Precio" value="<?php echo htmlspecialchars($row['precio']); ?>">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="custom-select custom-select-sm">
                <option value="Nuevo" <?= $row['estado'] == 'Nuevo' ? 'selected' : '' ?>>Nuevo</option>
                <option value="Usado" <?= $row['estado'] == 'Usado' ? 'selected' : '' ?>>Usado</option>
                <option value="Reparado" <?= $row['estado'] == 'Reparado' ? 'selected' : '' ?>>Reparado</option>
            </select>     

            <input type="submit" class="btn btn-primary" value="Actualizar información">
        </form>
    </div>
    <a href="Inicio.php" class="btn btn-dark">Regresar</a>
</body>
</html>
