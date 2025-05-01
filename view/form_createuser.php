<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="../styles/create.css">
</head>
<body>
    <h1>Registrar usuario</h1>
    <form action="../contr/createuser.php" method="POST">
        <label for="ci"> CI: </label><br>
        <input type="text" id="ci" name="ci" required><br><br>
            
        <label for="names">Nombres:</label><br>
        <input type="text" id="names" name="names" required><br><br>
        
        <label for="lastnames">Apellidos:</label><br>
        <input type="text" id="lastnames" name="lastnames" required><br><br>

        <label for="age">Edad:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="mail">Correo electrónico:</label><br>
        <input type="email" id="mail" name="mail" required><br><br>
        
        <label for="phone">Phone:</label><br>
        <input type="number" id="phone" name="phone" required><br><br>

        <label for="rol">Rol:</label><br>
        <select id="rol" name="rol" required>
            <option value="" disabled selected>Seleccione un rol</option>
            <?php foreach($rols as $r): ?>
            <option value="<?= htmlspecialchars($r['rol']) ?>"><?= htmlspecialchars($r['rol']) ?></option>
            <?php endforeach; ?>
        </select><br><br>        

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
