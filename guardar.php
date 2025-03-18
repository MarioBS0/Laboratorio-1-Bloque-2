<?php include 'header.php'; ?>
    <?php
    include 'db.php';

    $id = $_GET['id'] ?? null;
    $titulo = $genero = $plataforma = $precio = "";

    if ($id) {
        $result = $conn->query("SELECT * FROM videojuegos WHERE id = $id");
        if ($row = $result->fetch_assoc()) {
            $titulo = $row['titulo'];
            $genero = $row['genero'];
            $plataforma = $row['plataforma'];
            $precio = $row['precio'];
        }
    }
    ?>

    <form method="POST" action="procesar_guardar.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Título:</label>
        <input type="text" name="titulo" value="<?php echo htmlspecialchars($titulo); ?>" required>
        <label>Género:</label>
        <input type="text" name="genero" value="<?php echo htmlspecialchars($genero); ?>" required>
        <label>Plataforma:</label>
        <input type="text" name="plataforma" value="<?php echo htmlspecialchars($plataforma); ?>" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?php echo htmlspecialchars($precio); ?>" required>
        <button type="submit">Guardar</button>
    </form>

    <?php include 'footer.php'; ?>
