<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header>
            <h1>Libros</h1>
        </header>
        <main>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LibrosModal">
            Agregar Libro
            </button>
            <!-- Modal -->
            <div class="modal fade" id="LibrosModal" tabindex="-1" aria-labelledby="LibrosModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="LibrosModalLabel">Agregar Libro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?=base_url('insertar'); ?>" class="form" method="post">
                        <label for="txt_codigoLibro" class="form-label">Libro</label>
                        <input type="text" name="txt_codigoLibro" id="txt_codigoLibro" class="form-control">
                        <label for="txt_codigoAutor" class="form-label">Autor</label>
                        <input type="text" name="txt_codigoAutor" id="txt_codigoAutor" class="form-control">
                        <label for="txt_codigoEditorial" class="form-label">Editorial</label>
                        <input type="text" name="txt_codigoEditorial" id="txt_codigoEditorial" class="form-control">
                        <label for="txt_Titulo" class="form-label">Título</label>
                        <input type="text" name="txt_Titulo" id="txt_Titulo" class="form-control">
                        <label for="txt_numPaginas" class="form-label">Número de Páginas</label>
                        <input type="number" name="txt_numPaginas" id="txt_numPaginas" class="form-control">
                        <label for="txt_tamanio" class="form-label">Tamaño</label>
                        <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control">
                        <label for="txt_precio" class="form-label">Precio</label>
                        <input type="text" name="txt_precio" id="txt_precio" class="form-control">
                        <label for="txt_codigoEstado" class="form-label">stado</label>
                        <input type="text" name="txt_codigoEstado" id="txt_codigoEstado" class="form-control">
                        <label for="txt_edicion" class="form-label">Edición</label>
                        <input type="text" name="txt_edicion" id="txt_edicion" class="form-control">
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
                        <th>Libro</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Título</th>
                        <th>Número de Páginas</th>
                        <th>Tamaño</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Edición</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($datos as $libro) {
                    ?>
                    <tr>
                        <td><?=$libro['codigo_libro']?></td>
                        <td><?=$libro['codigo_autor']?></td>
                        <td><?=$libro['codigo_editorial']?></td>
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['numero_paginas']?></td>
                        <td><?=$libro['tamanio']?></td>
                        <td><?=$libro['precio']?></td>
                        <td><?=$libro['estado']?></td>
                        <td><?=$libro['codigo_estado']?></td>
                        <td><?=$libro['edicion']?></td>
                        <td>
                            <a href="<?=base_url('buscar/').$libro['codigo_libro'];?>" class="btn btn-primary">Actualizar</a>
                            <!--eliminar tiene la ruta eliminar/codigo-->
                            <a href="<?=base_url('eliminar/').$libro['codigo_libro'];?>" class="btn btn-danger">Eliminar</a>
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