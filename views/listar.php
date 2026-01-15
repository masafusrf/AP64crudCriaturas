<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Criaturas</title>
</head>
<body>

<h2>Listado de Criaturas</h2>

<a href="index.php?accion=crear">Crear criatura</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Peligrosidad</th>
        <th>Salud</th>
        <th>Profundidad</th>
        <th>Terreno</th>
        <th>Envergadura</th>
        <th>Acciones</th>
    </tr>

    <?php if(!empty($criaturas)): ?>
        <?php foreach ($criaturas as $c): ?>
        <tr>
            <td><?= $c->getId() ?></td>
            <td><?= $c->getNombre() ?></td>
            <td><?= $c->getEspecie() ?></td>
            <td><?= $c->getPeligrosidad() ?></td>
            <td><?= $c->getSalud() ?></td>
            <td><?= ($c instanceof CriaturaMarina) ? $c->getProfundidad() : 'X' ?></td>
            <td><?= ($c instanceof CriaturaTerrestre) ? $c->getTerreno() : 'X' ?></td>
            <td><?= ($c instanceof CriaturaVoladora) ? $c->getEnvergadura() : 'X' ?></td>
            <td>
                <a href="index.php?accion=editar&id=<?= $c->getId() ?>">Editar</a>
                <a href="index.php?accion=eliminar&id=<?= $c->getId() ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">No hay criaturas aún.</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
