<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Empleados</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#EmpleadosModal">
    Nuevo Empleado
</button>

<!-- Modal -->
<div class="modal fade" id="EmpleadosModal" tabindex="-1" aria-labelledby="EmpleadosModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="EmpleadosModalLabel">Agregar Empleado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('empleados/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Código</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_direccion" class="form-label">Dirección</label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_email" class="form-label">Email</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Código</th>
                        <th>Nombre Completo</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $empleado): ?>
                    <tr>
                        <td><?=$empleado['codigo_empleado']?></td>
                        <td><?=$empleado['nombre']." ".$empleado['apellido'];?></td>
                        <td><?=$empleado['direccion']?></td>
                        <td><?=$empleado['email']?></td>
                        <td>
                            <a href="<?=base_url('empleados/buscar/').$empleado['codigo_empleado'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('empleados/eliminar/').$empleado['codigo_empleado'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar empleado?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>