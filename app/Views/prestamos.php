<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header>
            <h1>Préstamos</h1>
        </header> 
        <main>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PrestamosModal">
            Agregar Préstamo
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
                    
                    <form action="<?=base_url('insertar'); ?>" class="form" method="post">
                        <label for="txt_codigoPrestamo" class="form-label">Código del Préstamo</label>
                        <input type="text" name="txt_codigoPrestamo" id="txt_codigoPrestamo" class="form-control">
                        <label for="txt_codigoLibro" class="form-label">Código del Libro</label>
                        <input type="text" name="txt_codigoLibro" id="txt_codigoLibro" class="form-control">
                        <label for="txt_codigoEstudiante" class="form-label">Carné del Alumno</label>
                        <input type="text" name="txt_codigoEstudiante" id="txt_codigoEstudiante" class="form-control">
                        <label for="txt_fechaPrestamo" class="form-label">Fecha de Préstamo</label>
                        <input type="date" name="txt_fechaPrestamo" id="txt_fechaPrestamo" class="form-control">
                        <label for="txt_fechaDevolucion" class="form-label">Fecha de Devolución</label>
                        <input type="date" name="txt_fechaDevolucion" id="txt_fechaDevolucion" class="form-control">
                        <label for="txt_codigoEmpleado" class="form-label">Código del Empleado</label>
                        <input type="text" name="txt_codigoEmpleado" id="txt_codigoEmpleado" class="form-control">
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
                        foreach ($datos as $prestamo) {
                    ?>
                    <tr>
                        <td><?=$prestamo['codigo_prestamo']?></td>
                        <td><?=$prestamo['nombre']." ".$prestamo['apellido'];?></td>
                        <td><?=$prestamo['direccion']?></td>
                        <td><?=$prestamo['email']?></td>
                        <td>
                            <a href="<?=base_url('buscar/').$prestamo['codigo_prestamo'];?>" class="btn btn-primary">Actualizar</a>
                            <!--eliminar tiene la ruta eliminar/codigo-->
                            <a href="<?=base_url('eliminar/').$prestamo['codigo_prestamo'];?>" class="btn btn-danger">eliminar</a>
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