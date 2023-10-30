<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <table class="table">
        <thead>
            <tr>
               
                <th>Titulo</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Fecha de Subida</th>
                <th>Valoración</th>
                <th>Ver/Editar/Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <h1 class="mb-4" style="text-align: center;">Libreria</h1>
        <hr>
            <?php if (session('usuario')->rol == 'admin'): ?>
                <div class="mb-3">
                    <a href="/libreria/crear" role="button" class="btn btn-success">Crear</a>
                </div>
            <?php endif; ?>
            <?php foreach ($libros as $libros): ?>
                
                <tr>
                    
                    <td><?= esc($libros->titulo) ?></td>
                    <td><?= esc($libros->categoria) ?></td>
                    <td><?= esc($libros->descripcion) ?></td>                 
                    <td><?= esc($libros->fecha_subida) ?></td>
                    <td><?= esc($libros->numero_descarga) ?></td> 
                    <td>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/libreria/ver/<?= esc($libros->id)?>" class="btn btn-primary btn-sm">Ver</a>
        <a href="/libreria/editar/<?= esc($libros->id)?>" class="btn btn-primary btn-sm">Editar</a>
        <form action="/libreria/eliminar/<?= esc($libros->id)?>" method="post" style="display: inline-block;">
            <?= csrf_field() ?>
            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
        </form>
    </div>
</td>

                    
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links()  ?>
    <?= $this->endSection() ?>
