<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Grados</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#GradosModal">
    Nuevo Grado
</button>

<!-- Modal -->
<div class="modal fade" id="GradosModal" tabindex="-1" aria-labelledby="GradosModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="GradosModalLabel">Agregar Grado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('grados/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Código del Grado</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre del Grado</label>
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
                    <?php foreach ($datos as $grado): ?>
                    <tr>
                        <td><?=$grado['codigo_grado']?></td>
                        <td><?=$grado['nombre'];?></td>
                        <td>
                            <a href="<?=base_url('grados/buscar/').$grado['codigo_grado'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('grados/eliminar/').$grado['codigo_grado'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar grado?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>