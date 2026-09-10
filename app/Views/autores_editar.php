<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mt-4 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Actualizar Autor</h3>
    </div>
    <div class="card-body">
        <form action="<?=base_url('autores/actualizar'); ?>" class="form" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['codigo_autor'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?=$datos['apellido'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" name="txt_nacionalidad" id="txt_nacionalidad" class="form-control" value="<?=$datos['nacionalidad'];?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?=base_url('autores')?>" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>