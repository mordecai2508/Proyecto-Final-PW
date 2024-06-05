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
    <link rel="stylesheet" href="Styles.css" media="print">
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

<div class="container">
    <a href="../Inicio.php" class="btn btn-dark boton"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>Regresar</a>
    <a href="GenerarExcel.php" class="btn btn-success boton"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"/></svg>Descargar Excel</a>
    <a href="" class="btn btn-danger boton" onclick="window.print()"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg>Imprimir</a>

</div>

</body>
</html>