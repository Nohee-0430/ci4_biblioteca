<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mt-4 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Actualizar Préstamo</h3>
    </div>
    <div class="card-body">
        <form action="<?=base_url('prestamos/actualizar'); ?>" class="form" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Número de Préstamo</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['numero_prestamo'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_codigo_libro" class="form-label">Código del Libro</label>
                <input type="number" name="txt_codigo_libro" id="txt_codigo_libro" class="form-control" value="<?=$datos['codigo_libro'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_carne_alumno" class="form-label">Carné del Alumno</label>
                <input type="number" name="txt_carne_alumno" id="txt_carne_alumno" class="form-control" value="<?=$datos['carne_alumno'];?>" required>
            </div>
            <div class="mb-3">
                <label for="txt_fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                <input type="date" name="txt_fecha_prestamo" id="txt_fecha_prestamo" class="form-control" value="<?=$datos['fecha_prestamo'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_fecha_devolucion" class="form-label">Fecha de Devolución</label>
                <input type="date" name="txt_fecha_devolucion" id="txt_fecha_devolucion" class="form-control" value="<?=$datos['fecha_devolucion'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_codigo_empleado" class="form-label">Código de Empleado</label>
                <input type="number" name="txt_codigo_empleado" id="txt_codigo_empleado" class="form-control" value="<?=$datos['codigo_empleado'];?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?=base_url('prestamos')?>" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>