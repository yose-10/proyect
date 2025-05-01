<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Rol</title>
</head>
<body>
    <h1>Eliminar Rol</h1>
    <p>¿Estás seguro de que deseas eliminar el siguiente rol?</p>
    <ul>
        <li><strong>rol:</strong> <?= htmlspecialchars($rolData['rol']) ?></li>
        <li><strong>descripción:</strong> <?= htmlspecialchars($rolData['description']) ?></li>
    </ul>
    <form action="../contr/deleterol.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($rolData['id']) ?>">
        <button type="submit">Eliminar</button>
        <a href="indexrol.php">Cancelar</a>
    </form>
</body>
</html>
