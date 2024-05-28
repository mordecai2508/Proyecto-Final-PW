<?php
session_start();
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usertbl (full_name, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $full_name, $email, $username, $password);
    if ($stmt->execute()) {
        $_SESSION['success'] = '¡Cuenta creada exitosamente! Por favor, inicia sesión.';
        header("Location: Index.php");
        exit();
    } else {
        $_SESSION['error'] = 'Error al crear la cuenta. Inténtalo de nuevo más tarde.';
        header("Location: Register.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        
        <?php
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        }
        ?>
        <form action="register.php" method="POST">
        <h1 class="mb-4">Crear Cuenta</h1>
            <div class="form-group">
                <label for="full_name">Nombre Completo</label>
                <input type="text" class="form-control" placeholder="*" id="full_name" name="full_name" required > 
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" placeholder="*" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" class="form-control" placeholder="*" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" placeholder="*" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Cuenta</button>
        </form>
    </div>
</body>
</html>
