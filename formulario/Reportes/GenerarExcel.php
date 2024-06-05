<?php

Header("Content-type: application/xls");
Header("Content-Disposition: attachment; filename = Reporte-Motos.xls");
?>
<?php
include('../connection.php');

$sql = "SELECT * FROM motos";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Concesionario de Motos</title>
</head>
<body>
    
<h1>Concesionario de Motos</h1>
    <br><br><br>
    <h1>Motos Ingresadas</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($result)):?>
            <tr>
                <th><i class="fa-duotone fa-motorcycle"></i></th>
                <th><?= $row['id']?></th>
                <th><?= $row['marca'] ?></th>
                <th><?= $row['modelo'] ?></th>
                <th><?= $row['anio']?></th>
                <th><?= $row['precio'] ?></th>
                <th><?= $row['estado']?></th>

            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>


</body>
</html>