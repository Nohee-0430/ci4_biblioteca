<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Libros</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#LibrosModal">
    Nuevo Libro
</button>

<!-- Modal -->
<div class="modal fade" id="LibrosModal" tabindex="-1" aria-labelledby="LibrosModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="LibrosModalLabel">Agregar Libro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('libros/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Código del Libro</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_codigo_autor" class="form-label">Código del Autor</label>
                        <input type="number" name="txt_codigo_autor" id="txt_codigo_autor" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_codigo_editorial" class="form-label">Código de Editorial</label>
                        <input type="number" name="txt_codigo_editorial" id="txt_codigo_editorial" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_titulo" class="form-label">Título</label>
                        <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_numero_paginas" class="form-label">Número de Páginas</label>
                        <input type="number" name="txt_numero_paginas" id="txt_numero_paginas" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_tamanio" class="form-label">Tamaño</label>
                        <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_estado" class="form-label">Código Estado</label>
                        <input type="number" name="txt_estado" id="txt_estado" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_edicion" class="form-label">Edición</label>
                        <input type="number" name="txt_edicion" id="txt_edicion" class="form-control">
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
                        <th>Título</th>
                        <th>Autor (ID)</th>
                        <th>Editorial (ID)</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $libro): ?>
                    <tr>
                        <td><?=$libro['codigo_libro']?></td>
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['codigo_autor']?></td>
                        <td><?=$libro['codigo_editorial']?></td>
                        <td>$ <?=$libro['precio']?></td>
                        <td><?=$libro['estado']?></td>
                        <td>
                            <a href="<?=base_url('libros/buscar/').$libro['codigo_libro'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('libros/eliminar/').$libro['codigo_libro'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar libro?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>