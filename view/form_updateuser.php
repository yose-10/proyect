<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="../styles/update.css">
</head>
<body>
    <h1>Actualizar usuario</h1>
    <form action="updateuser.php" method="POST">
        <input type="text" name="ci" value="<?= htmlspecialchars($userData['ci']) ?>" readonly><br><br>

        <label for="names">Nombres:</label><br>
        <input type="text" id="names" name="names" value="<?= htmlspecialchars($userData['names']) ?>" required><br><br>

        <label for="lastnames">Apellidos:</label><br>
        <input type="text" id="lasnames" name="lastnames" value="<?= htmlspecialchars($userData['lastnames']) ?>" required><br><br>

        <label for="age">Edad:</label><br>
        <input type="number" id="age" name="age" value="<?= htmlspecialchars($userData['age']) ?>" required><br><br>

        <label for="mail">Correo electrónico:</label><br>
        <input type="email" id="mail" name="mail" value="<?= htmlspecialchars($userData['mail']) ?>" required><br><br>

        <label for="phone">Telefono:</label><br>
        <input type="number" id="phone" name="phone" value="<?= htmlspecialchars($userData['phone']) ?>" required><br><br>
        
        <label for="rol">Rol:</label><br>
        <select id="rol" name="rol" required>
            <option value="" disabled selected>Seleccione un rol</option>
            <?php foreach($rols as $r): ?>
                <option value="<?= htmlspecialchars($r['rol']) ?>"
                    <?= $userData['rol'] == $r['rol'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($r['rol']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>         

        <button type="submit">Actualizar</button>
    </form>
    <a href="indexuser.php">Volver a la lista</a>
</body>
</html>
