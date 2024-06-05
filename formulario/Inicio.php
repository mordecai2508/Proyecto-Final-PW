<?php
include('connection.php');

$sql = "SELECT * FROM motos";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Concesionario de Motos</title>
</head>
<body>
    
<h1>Concesionario de Motos</h1>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <div>
        
        <form action="agregar_moto.php" method="POST" class="form-group">
            <h1>Agregar una moto</h1>
            <input type="hidden" name="id" >
            <input type="text" name="marca" placeholder="Marca" required>
            <input type="text" name="modelo" placeholder="Modelo" required>
            <input type="text" name="anio" placeholder="Anio" required>
            <input type="text" name="precio" placeholder="Precio" required>
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="custom-select custom-select-sm" required>
                <option value="Nuevo">Nuevo</option>
                <option value="Usado">Usado</option>
                <option value="Reparado">Reparado</option>
            </select> 
            <br><br>
            <button type="submit" calss="btn btn-danger" >Agregar moto<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg></button>
        </form>
        <a href="index.php" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>Salir</a>
    </div>

    <br>
    <h1>Motos Ingresadas</h1>
    <a href="Reportes/Detalle.php" class="btn btn-success" ><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><rect fill="none" height="24" width="24"/><path d="M12,3L2,21h20L12,3z M13,8.92L18.6,19H13V8.92z M11,8.92V19H5.4L11,8.92z"/></svg>Ver Detalle</a>
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
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($result)):?>
            <tr>
                <th><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><g><rect fill="none" fill-rule="evenodd" height="24" width="24" x="0" y="0"/><path d="M20,11c-0.18,0-0.36,0.03-0.53,0.05L17.41,9H20V6l-3.72,1.86L13.41,5H9v2h3.59l2,2H11l-4,2L5,9H0v2h4c-2.21,0-4,1.79-4,4 c0,2.21,1.79,4,4,4c2.21,0,4-1.79,4-4l2,2h3l3.49-6.1l1.01,1.01C16.59,12.64,16,13.75,16,15c0,2.21,1.79,4,4,4c2.21,0,4-1.79,4-4 C24,12.79,22.21,11,20,11z M4,17c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2C6,16.1,5.1,17,4,17z M20,17c-1.1,0-2-0.9-2-2 c0-1.1,0.9-2,2-2s2,0.9,2,2C22,16.1,21.1,17,20,17z"/></g></svg></th>
                <th><?= $row['id']?></th>
                <th><?= $row['marca'] ?></th>
                <th><?= $row['modelo'] ?></th>
                <th><?= $row['anio']?></th>
                <th><?= $row['precio'] ?></th>
                <th><?= $row['estado']?></th>

                <th><a href="editar.php?id=<?= $row['id']?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>Editar</a></th>
                <th><a href="eliminar.php?id=<?= $row['id']?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>Eliminar</a></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>



</body>
</html>