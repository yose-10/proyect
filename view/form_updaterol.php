<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Rol</title>
    <link rel="stylesheet" href="../styles/update.css">
</head>
<body>
    <h1>Actualizar Rol</h1>
    <form action="../contr/updaterol.php" method="POST">
        <input type="number" name="id" value="<?= htmlspecialchars($rolData['id']) ?>" readonly><br><br>

        <label for="rol">Rol:</label><br>
        <input type="text" id="rol" name="rol" value="<?= htmlspecialchars($rolData['rol']) ?>" required><br><br>

        <label for="description">Descripción:</label><br>
        <input type="text" id="description" name="description" value="<?= htmlspecialchars($rolData['description']) ?>" required><br><br>
        
        <label>
            Estado:
            <input type="checkbox" name="state" id="state" value="1" <?= $rolData['state'] ? 'checked': '' ?>>
        </label>
        
        <button type="submit">Actualizar</button>
    </form>
    <a href="indexrol.php">Volver a la listade roles</a>
</body>
</html>
