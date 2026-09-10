<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mt-4 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Actualizar Estado</h3>
    </div>
    <div class="card-body">
        <form action="<?=base_url('estados/actualizar'); ?>" class="form" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código del Estado</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['codigo_estado'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre del Estado</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?=base_url('estados')?>" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>