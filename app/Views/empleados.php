<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Empleados</h1>
    <form action="<?=base_url('guardar_empleados')?>" method="post">
        <label for="">Código</label>
        <input type="number" name="txt_codigo" id="txt_codigo">
        <br>
        <br>
        <label for="">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre">
        <br>
        <br>
        <label for="">Apellido</label>
        <input type="text" name="txt_apellido" id="txt_apellido">
        <br>
        <br>
        <label for="">Dirección</label>
        <input type="text" name="txt_direccion" id="txt_direccion">
        <br>
        <br>
        <label for="">Correo</label>
        <input type="email" name="txt_correo" id="txt_correo">
        <button type="submit">Guardar</button>
    </form>
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