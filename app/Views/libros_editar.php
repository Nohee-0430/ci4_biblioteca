<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mt-4 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Actualizar Libro</h3>
    </div>
    <div class="card-body">
        <form action="<?=base_url('libros/actualizar'); ?>" class="form" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código del Libro</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['codigo_libro'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_codigo_autor" class="form-label">Código del Autor</label>
                <input type="number" name="txt_codigo_autor" id="txt_codigo_autor" class="form-control" value="<?=$datos['codigo_autor'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_codigo_editorial" class="form-label">Código de Editorial</label>
                <input type="number" name="txt_codigo_editorial" id="txt_codigo_editorial" class="form-control" value="<?=$datos['codigo_editorial'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_titulo" class="form-label">Título</label>
                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" value="<?=$datos['titulo'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_numero_paginas" class="form-label">Número de Páginas</label>
                <input type="number" name="txt_numero_paginas" id="txt_numero_paginas" class="form-control" value="<?=$datos['numero_paginas'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_tamanio" class="form-label">Tamaño</label>
                <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control" value="<?=$datos['tamanio'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control" value="<?=$datos['precio'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_estado" class="form-label">Código Estado</label>
                <input type="number" name="txt_estado" id="txt_estado" class="form-control" value="<?=$datos['estado'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_edicion" class="form-label">Edición</label>
                <input type="number" name="txt_edicion" id="txt_edicion" class="form-control" value="<?=$datos['edicion'];?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?=base_url('libros')?>" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>