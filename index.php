<?php include 'header.php'; ?>

<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "crud_juegos");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener videojuegos
$result = $conn->query("SELECT * FROM videojuegos");

// Mostrar tabla de videojuegos
echo "<table>
<tr><th>ID</th><th>Título</th><th>Género</th><th>Plataforma</th><th>Precio</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['titulo']}</td>
    <td>{$row['genero']}</td>
    <td>{$row['plataforma']}</td> <!-- Aquí estaba el error -->
    <td>{$row['precio']}</td>
    <td>
        <a href='guardar.php?id={$row['id']}'>Editar</a> | 
        <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
    </td>
</tr>";
}
echo "</table>";

$conn->close();
?>

<?php include 'footer.php'; ?>

