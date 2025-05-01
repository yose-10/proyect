<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create rol</title>
    <link rel="stylesheet" href="../styles/create.css">
</head>
<body>
    <h1>Create rol</h1>
    <form action="../contr/createrol.php" method="POST">
            
        <label for="rol">Rol:</label><br>
        <input type="text" id="rol" name="rol" required><br><br>
        
        <label for="description">Descripción:</label><br>
        <input type="text" id="description" name="description" required><br><br>

        <label>
            Estado:
            <input type="checkbox" name="state" id="state" value="0" checked>
        </label>
        
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
