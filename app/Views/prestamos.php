<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Préstamos</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#PrestamosModal">
    Nuevo Préstamo
</button>

<!-- Modal -->
<div class="modal fade" id="PrestamosModal" tabindex="-1" aria-labelledby="PrestamosModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="PrestamosModalLabel">Agregar Préstamo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('prestamos/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Número de Préstamo</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_codigo_libro" class="form-label">Código del Libro</label>
                        <input type="number" name="txt_codigo_libro" id="txt_codigo_libro" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_carne_alumno" class="form-label">Carné del Alumno</label>
                        <input type="number" name="txt_carne_alumno" id="txt_carne_alumno" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                        <input type="date" name="txt_fecha_prestamo" id="txt_fecha_prestamo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_fecha_devolucion" class="form-label">Fecha de Devolución</label>
                        <input type="date" name="txt_fecha_devolucion" id="txt_fecha_devolucion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_codigo_empleado" class="form-label">Código de Empleado (Autoriza)</label>
                        <input type="number" name="txt_codigo_empleado" id="txt_codigo_empleado" class="form-control">
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
                        <th>N° Préstamo</th>
                        <th>ID Libro</th>
                        <th>Carné Alumno</th>
                        <th>Fecha Préstamo</th>
                        <th>Fecha Devolución</th>
                        <th>ID Empleado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $prestamo): ?>
                    <tr>
                        <td><?=$prestamo['numero_prestamo']?></td>
                        <td><?=$prestamo['codigo_libro']?></td>
                        <td><?=$prestamo['carne_alumno']?></td>
                        <td><?=$prestamo['fecha_prestamo']?></td>
                        <td><?=$prestamo['fecha_devolucion']?></td>
                        <td><?=$prestamo['codigo_empleado']?></td>
                        <td>
                            <a href="<?=base_url('prestamos/buscar/').$prestamo['numero_prestamo'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('prestamos/eliminar/').$prestamo['numero_prestamo'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar préstamo?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>