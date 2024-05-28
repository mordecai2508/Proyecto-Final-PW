<?php
// Aquí deberías incluir tu archivo de conexión a la base de datos

// Función para obtener y mostrar los datos existentes
function mostrarMotos($connection) {
    $sql = "SELECT * FROM motos";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Precio</th><th>Estado</th><th>Acciones</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["marca"] . "</td>";
            echo "<td>" . $row["modelo"] . "</td>";
            echo "<td>" . $row["anio"] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "<td>" . $row["estado"] . "</td>";
            echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay motos registradas.";
    }
}

// Aquí deberías incluir tu formulario para agregar datos
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario de Motos</title>
</head>
<body>
    <h1>Concesionario de Motos</h1>
    
    <h2>Motos disponibles</h2>
    <?php mostrarMotos($connection); ?>
    
    <!-- Aquí deberías incluir tu formulario para agregar datos -->

</body>
</html>
