<?php 
include('connection.php');

$id = null;
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];

$sql = "INSERT INTO motos VALUES('$id','$marca','$modelo','$anio','$precio','$estado')";

if (mysqli_query($conn, $sql)) {
    header("Location: inicio.php?success=Moto agregada correctamente");
} else {
    header("Location: inicio.php?error=Error al agregar la moto");
}
?>