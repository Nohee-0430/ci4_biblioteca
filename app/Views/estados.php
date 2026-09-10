<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Estados</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#EstadosModal">
    Nuevo Estado
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
                <form action="<?=base_url('estados/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Código del Estado</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre del Estado</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
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
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $estado): ?>
                    <tr>
                        <td><?=$estado['codigo_estado']?></td>
                        <td><?=$estado['nombre'];?></td>
                        <td>
                            <a href="<?=base_url('estados/buscar/').$estado['codigo_estado'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('estados/eliminar/').$estado['codigo_estado'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar estado?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>