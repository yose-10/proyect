<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="../styles/lists.css">
</head>
<body>
    <h2>USUARIOS</h2>
    <a href="createuser.php" class="btn-nuevo">REGISTRAR</a>
    <a href="indexrol.php" class="btn-rol">ROLES</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ci</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?= htmlspecialchars($u['ci'] ?? '') ?></td>
                <td><?= htmlspecialchars($u['names'] ?? '') ?></td>
                <td><?= htmlspecialchars($u['lastnames'] ?? '') ?></td>
                <td><?= htmlspecialchars($u['age'] ?? '') ?></td>
                <td><?= htmlspecialchars($u['mail'] ?? '') ?></td>
                <td><?= htmlspecialchars($u['phone'] ?? '') ?></td>
                <td><?= htmlspecialchars($u['rol'] ?? '') ?></td>
                <td>
                    <a href="updateuser.php?ci=<?= urlencode($u['ci']) ?>">Editar</a> |
                    <a href="deleteuser.php?ci=<?= urlencode($u['ci']) ?>" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
