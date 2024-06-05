<?php 
include('connection.php');

$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];

$sql = "UPDATE motos SET marca='$marca',modelo='$modelo',anio='$anio',precio='$precio',estado='$estado' WHERE id ='$id'";


$result = mysqli_query($conn, $sql);

if ($result) {
    Header("Location: inicio.php");
}

?>