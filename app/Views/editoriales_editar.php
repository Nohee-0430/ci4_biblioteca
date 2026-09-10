<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mt-4 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Actualizar Editorial</h3>
    </div>
    <div class="card-body">
        <form action="<?=base_url('editoriales/actualizar'); ?>" class="form" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['codigo_editorial'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_direccion" class="form-label">Dirección</label>
                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?=$datos['direccion'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_telefono" class="form-label">Teléfono</label>
                <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" value="<?=$datos['telefono'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?=$datos['email'];?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?=base_url('editoriales')?>" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>