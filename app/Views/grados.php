<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grados</h1>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $grados):
            ?>
            <tr>
                <td>
                    <?php echo($grados['codigo_grado']);?>
                </td>
                <td>
                    <?=$empleado['nombre'];?>
                </td>
                <td>Actualizar / Eliminar</td>
            </tr>
            <?php
                endforeach
            ?>
        </tbody>
    </table>
</body>
</html>