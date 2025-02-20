<h1>Lista de empleados</h1>
<a href="index.php?action=create">Agregar empleado</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Teléfono</th>
        <th>Cargo</th>
        <th>Avatar</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($empleados as $empleado): ?>
        <tr>
            <td><?= $empleado['id'] ?></td>
            <td><?= $empleado['nombre'] ?></td>
            <td><?= $empleado['edad'] ?></td>
            <td><?= $empleado['teléfono'] ?></td>
            <td><?= $empleado['cargo'] ?></td>
            <td><?= $empleado['aavatar'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $empleado['id'] ?>">Actualizar</a>
                <a href="index.php?action=delete&id=<?= $empleado['id']?>" onclick="return confirm('¿Estás seguro?')">Eliminar
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>