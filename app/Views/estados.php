<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<body>
    <h1>Estados</h1>
    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EstadosModal">
            Nuevo
            </button>
            <!-- Modal -->
            <div class="modal fade" id="EstadosModal" tabindex="-1" aria-labelledby="EstadosModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="EstadosModalLabel">Agregar Estado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?=base_url('insertar'); ?>" class="form" method="post">
                        <label for="txt_codigo" class="form-label">Código</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre(s)</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($datos as $estado) {
                    ?>
                    <tr>
                        <td><?=$estado['codigo_estado']?></td>
                        <td><?=$estado['nombre'];?></td>
                        <td>
                            <a href="<?=base_url('buscar/').$estado['codigo_estado'];?>" class="btn btn-primary">Actualizar</a>
                            <!--eliminar tiene la ruta eliminar/codigo-->
                            <a href="<?=base_url('eliminar/').$estado['codigo_estado'];?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
</body>
</html>