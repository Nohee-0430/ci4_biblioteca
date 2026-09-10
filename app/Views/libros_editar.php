<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form action="<?=base_url('actualizar'); ?>" class="form" method="post">
        <label for="txt_codigoLibro" class="form-label">Libro</label>
        <input type="text" name="txt_codigoLibro" id="txt_codigoLibro" class="form-control" value="<?=$datos['codigo_libro'];?>">
        <label for="txt_codigoAutor" class="form-label">Autor</label>
        <input type="text" name="txt_codigoAutor" id="txt_codigoAutor" class="form-control" value="<?=$datos['codigo_autor'];?>">
        <label for="txt_codigoEditorial" class="form-label">Editorial</label>
        <input type="text" name="txt_codigoEditorial" id="txt_codigoEditorial" class="form-control" value="<?=$datos['codigo_editorial'];?>">
        <label for="txt_titulo" class="form-label">titulo</label>
        <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" value="<?=$datos['titulo'];?>">
        <label for="txt_numPaginas" class="form-label">Número de Páginas</label>
        <input type="text" name="txt_numPaginas" id="txt_numPaginas" class="form-control" value="<?=$datos['numero_paginas'];?>">
        <label for="txt_tamanio" class="form-label">Tamaño</label>
        <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control" value="<?=$datos['tamanio'];?>">
        <label for="txt_precio" class="form-label">Precio</label>
        <input type="text" name="txt_precio" id="txt_precio" class="form-control" value="<?=$datos['precio'];?>">
        <label for="txt_codigoEstado" class="form-label">Estado</label>
        <input type="text" name="txt_codigoEstado" id="txt_codigoEstado" class="form-control" value="<?=$datos['codigo_estado'];?>">
        <label for="txt_edicion" class="form-label">Edición</label>
        <input type="text" name="txt_edicion" id="txt_edicion" class="form-control" value="<?=$datos['edicion'];?>">  
        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>