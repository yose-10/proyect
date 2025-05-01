<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de roles</title>
    <link rel="stylesheet" href="../styles/lists.css">
</head>
<body>
    <h2>ROLES</h2>
    <a href="createrol.php" class="btn-add-rols">AGREGAR ROLES</a>
    <a href="indexuser.php" class="btn-users">USUARIOS</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rol</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rols as $r): ?>
            <tr>
                <td><?= htmlspecialchars($r['id'] ?? '') ?></td>
                <td><?= htmlspecialchars($r['rol'] ?? '') ?></td>
                <td><?= htmlspecialchars($r['description'] ?? '') ?></td>
                <td><?= htmlspecialchars($r['state'] ?? '') ?></td>
                <td>
                    <a href="updaterol.php?id=<?= urlencode($r['id']) ?>">Editar</a> |
                    <a href="deleterol.php?id=<?= urlencode($r['id']) ?>" onclick="return confirm('¿Seguro que deseas eliminar este rol?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
