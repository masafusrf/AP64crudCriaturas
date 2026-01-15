<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <tr>
            <td>
                <!-- Botón Editar -->
                <form method="POST" action="index.php?accion=editar&id=<?= $criatura->getId() ?>">
                    <input type="hidden" name="id" value="<?= $criatura->getId() ?>">

                    Salud: <input type="number" name="salud" value="<?= $criatura->getSalud() ?>" required><br>

                    Nivel de peligro:
                    <select name="peligrosidad" required>
                        <option value="alto" <?= $criatura->getPeligrosidad() === 'alto' ? 'selected' : '' ?>>Alto</option>
                        <option value="medio" <?= $criatura->getPeligrosidad() === 'medio' ? 'selected' : '' ?>>Medio</option>
                        <option value="bajo" <?= $criatura->getPeligrosidad() === 'bajo' ? 'selected' : '' ?>>Bajo</option>
                    </select><br>

                    <button type="submit">Modificar</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>