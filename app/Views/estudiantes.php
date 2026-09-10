<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header>
            <h1>Estudiantes</h1>
        </header>
        <main>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EstudiantesModal">
            Agregar Estudiante
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
                    
                    <form action="<?=base_url('insertar'); ?>" class="form" method="post">
                        <label for="txt_codigoEstudiante" class="form-label">Carné</label>
                        <input type="text" name="txt_codigoEstudiante" id="txt_codigoEstudiante" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                        <label for="txt_direccion" class="form-label">Dirección</label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                        <label for="txt_email" class="form-label">Email</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">
                        <label for="txt_fechaNac" class="form-label">Fecha de Nacimiento </label>
                        <input type="date" name="txt_fechaNac" id="txt_fechaNac" class="form-control">
                        <label for="txt_codigoGrado" class="form-label">Grado</label>
                        <input type="text" name="txt_codigoGrado" id="txt_codigoGrado" class="form-control">
                        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>

                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    
                </div>
                </div>
            </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($datos as $estudiante) {
                    ?>
                    <tr>
                        <td><?=$estudiante['codigo_estudiante']?></td>
                        <td><?=$estudiante['nombre']." ".$estudiante['apellido'];?></td>
                        <td><?=$estudiante['direccion']?></td>
                        <td><?=$estudiante['email']?></td>
                        <td>
                            <a href="<?=base_url('buscar/').$estudiante['codigo_estudiante'];?>" class="btn btn-primary">Actualizar</a>
                            <!--eliminar tiene la ruta eliminar/codigo-->
                            <a href="<?=base_url('eliminar/').$estudiante['codigo_estudiante'];?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</body>
</html>