<?php
include('connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM motos WHERE id='$id'";


$result = mysqli_query($conn, $sql);

if ($result) {
    Header("Location: inicio.php");
}
?>