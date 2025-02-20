<h1>Editar empleado</h1>
<form method="POST" action="index.php?action=edit&id=<?= $empleado['id']?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= $empleado['nombre'] ?>"required>
    <br>
    <label for="edad">Edad:</label>
    <input type="text" name="edad" value="<?= $empleado['edad'] ?>"required>
    <br>
    <label for="telefono">Teléfono:</label>
    <input type="number" name="telefono" value="<?= $empleado['telefono'] ?>" required>
    <br>
    <label for="cargo">Cargo:</label>
    <input type="text" name="cargo" value="<?= $empleado['cargo'] ?>" required>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="text" name="avatar" value="<?= $empleado['avatar'] ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>