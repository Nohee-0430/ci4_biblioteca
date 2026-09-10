<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mt-4">Estudiantes</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#EstudiantesModal">
    Nuevo Estudiante
</button>

<!-- Modal -->
<div class="modal fade" id="EstudiantesModal" tabindex="-1" aria-labelledby="EstudiantesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="EstudiantesModalLabel">Agregar Estudiante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('estudiantes/insertar'); ?>" class="form" method="post">
                    <div class="mb-3">
                        <label for="txt_codigo" class="form-label">Carné del Alumno</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt_direccion" class="form-label">Dirección</label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_telefono" class="form-label">Teléfono</label>
                        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_email" class="form-label">Email</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_fechaNac" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="txt_fechaNac" id="txt_fechaNac" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txt_codigo_grado" class="form-label">Código de Grado</label>
                        <input type="number" name="txt_codigo_grado" id="txt_codigo_grado" class="form-control" placeholder="Ej: 1">
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
                        <th>Carné</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Fecha Nac.</th>
                        <th>Grado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $estudiante): ?>
                    <tr>
                        <td><?=$estudiante['carne_alumno']?></td>
                        <td><?=$estudiante['nombre']?></td>
                        <td><?=$estudiante['apellido']?></td>
                        <td><?=$estudiante['direccion']?></td>
                        <td><?=$estudiante['telefono']?></td>
                        <td><?=$estudiante['email']?></td>
                        <td><?=$estudiante['fechanacimiento']?></td>
                        <td><?=$estudiante['codigo_grado']?></td>
                        <td>
                            <a href="<?=base_url('estudiantes/buscar/').$estudiante['carne_alumno'];?>" class="btn btn-sm btn-info">Actualizar</a>
                            <a href="<?=base_url('estudiantes/eliminar/').$estudiante['carne_alumno'];?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar estudiante?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>