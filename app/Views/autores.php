<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Autores</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#AutoresModal">
    Nuevo Autor
</button>

<!-- Modal -->
<div class="modal fade" id="AutoresModal" tabindex="-1" aria-labelledby="AutoresModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="AutoresModalLabel">Agregar Autor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('autores/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Código</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" name="txt_nacionalidad" id="txt_nacionalidad" class="form-control">
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
                        <th>Apellido</th>
                        <th>Nacionalidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $autor): ?>
                    <tr>
                        <td><?=$autor['codigo_autor']?></td>
                        <td><?=$autor['nombre']?></td>
                        <td><?=$autor['apellido']?></td>
                        <td><?=$autor['nacionalidad']?></td>
                        <td>
                            <a href="<?=base_url('autores/buscar/').$autor['codigo_autor'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('autores/eliminar/').$autor['codigo_autor'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar autor?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>