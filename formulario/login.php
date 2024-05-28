<?php

session_start();

    include('connection.php');

    if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = trim($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['Usuario']);
        $Clave = validate($_POST['Clave']);

        if (empty($Usuario)) {
            header("Location: Index.php?error = El Usuario es requerido");
            exit();
        }elseif (empty($Clave)) {
            header("Location: Index.php?error = La contraseña es requerida");
            exit();
        }else{

            $Sql = "SELECT * FROM usertbl WHERE username = '$Usuario' AND password = '$Clave'";
            $result = mysqli_query($conn, $Sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($row['username'] === $Usuario && $row['password'] === $Clave) {
                    $_SESSION['Usuario'] = $row['username'];
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: Inicio.php");

                }else{
                    header("Location: Index.php?error= El usuario o la contraseña son incorrectas");
                    exit();
                }
            }else {
                header("Location: Index.php?error= El usuario o la contraseña son incorrectas");
                exit();
            }
        
        }

    }else {
        header("Location: Index.php");
        exit();
    }


?>