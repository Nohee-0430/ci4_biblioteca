<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estados</h1>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $empleado):
            ?>
            <tr>
                <td>
                    <?php echo($empleado['codigo_empleado']);?>
                </td>
                <td>
                    <?=$empleado['nombre'];?>
                </td>
                <td>
                    <?=$empleado['apellido'];?>
                </td>
                <td>
                    <?=$empleado['direccion'];?>
                </td>
                <td>
                    <?=$empleado['email'];?>
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