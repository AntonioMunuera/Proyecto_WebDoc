<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<div class="card card-header" style="text-align: center;"><h1><?= esc($categorias->nombre) ?></h1>
<p><i><?= esc($categorias->descripcion) ?></i></p>
</div>
<table class="table">
    <thead>
        <tr>
            
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Fecha de Subida</th>
            <th>Valoración</th>
            <th>Ver/Editar/Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro) : ?>
            <tr>
                
                <td><?= esc($libro->titulo) ?></td>
                <td><?= esc($libro->descripcion) ?></td>
                <td><?= esc($libro->fecha_subida) ?></td>
                <td><?= esc($libro->numero_descarga) ?></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/libreria/ver/<?= esc($libro->id)?>" role="button" class="btn btn-primary btn-sm">Ver</a>
                    <?php if (session('usuario')->rol == 'admin'): ?>
                    <a href="/libreria/editar/<?= esc($libro->id)?>" role="button" class="btn btn-primary btn-sm">Editar</a>
                    <form action="/libreria/eliminar/<?= esc($libro->id)?>" method="post">
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    </div>
                    <?php endif; ?>
                </td>
            </tr>
            
        <?php endforeach; ?>
    </tbody>
</table>

<?= $pager->links() ?>

<?= $this->endSection() ?>
