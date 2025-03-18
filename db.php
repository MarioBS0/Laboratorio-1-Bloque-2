<?php
$conn = new mysqli("localhost", "root", "", "crud_juegos");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

