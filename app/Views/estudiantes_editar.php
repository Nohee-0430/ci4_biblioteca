<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mt-4 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Actualizar Estudiante</h3>
    </div>
    <div class="card-body">
        <form action="<?=base_url('estudiantes/actualizar'); ?>" class="form" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Carné del Alumno</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['carne_alumno'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?=$datos['apellido'];?>" required>
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
            <div class="mb-3">
                <label for="txt_fechaNac" class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="txt_fechaNac" id="txt_fechaNac" class="form-control" value="<?=$datos['fechanacimiento'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_codigo_grado" class="form-label">Código de Grado</label>
                <input type="number" name="txt_codigo_grado" id="txt_codigo_grado" class="form-control" value="<?=$datos['codigo_grado'];?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?=base_url('estudiantes')?>" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>