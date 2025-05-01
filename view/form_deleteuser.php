<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar usuario</title>
</head>
<body>
    <h1>Eliminar usuario</h1>
    <p>¿Estás seguro de que deseas eliminar el siguiente usuario?</p>
    <ul>
        <li><strong>CI:</strong> <?= htmlspecialchars($userData['ci']) ?></li>
        <li><strong>Nombres:</strong> <?= htmlspecialchars($userData['names']) ?></li>
        <li><strong>Apellidos:</strong> <?= htmlspecialchars($userData['lastnames']) ?></li>
    </ul>
    <form action="../contr/deleteuser.php" method="POST">
        <input type="hidden" name="ci" value="<?= htmlspecialchars($userData['ci']) ?>">
        <button type="submit">Eliminar</button>
        <a href="indexuser.php">Cancelar</a>
    </form>
</body>
</html>
