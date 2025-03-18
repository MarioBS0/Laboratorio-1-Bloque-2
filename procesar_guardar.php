<?php
include 'db.php';

$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$plataforma = $_POST['plataforma'];
$precio = $_POST['precio']; // Cambiado de lanzamiento a precio

if ($id) {
    // Actualizar videojuego existente
    $stmt = $conn->prepare("UPDATE videojuegos SET titulo=?, genero=?, plataforma=?, precio=? WHERE id=?");
    $stmt->bind_param("sssdi", $titulo, $genero, $plataforma, $precio, $id); // Cambiado a sssdi para incluir el tipo decimal
} else {
    // Insertar nuevo videojuego
    $stmt = $conn->prepare("INSERT INTO videojuegos (titulo, genero, plataforma, precio) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $titulo, $genero, $plataforma, $precio); // Cambiado a sssd para incluir el tipo decimal
}

$stmt->execute();
$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>
