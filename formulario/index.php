<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de Sesion</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h1>Iniciar Sesion</h1>
        <hr>
        <?php
            if (isset($_GET['error'])) {
                ?>
                <p class="error">
                    <?php
                        echo $_GET['error']
                    ?>
                </p>
        <?php
            }
        ?>


        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="text" name="Clave" placeholder="Contraseña">
        <hr>

        <button type="submit">Iniciar Sesion</button>
        <a href="register.php" >Crear Cuenta</a>
    </form>
    
</body>
</html>