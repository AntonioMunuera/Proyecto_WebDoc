<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<div class="card card-header"><h1><?= esc($categorias->nombre) ?></h1>
<p><i><?= esc($categorias->descripcion) ?></i></p>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
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
                <td><?= esc($libro->id) ?></td>
                <td><?= esc($libro->titulo) ?></td>
                <td><?= esc($libro->descripcion) ?></td>
                <td><?= esc($libro->fecha_subida) ?></td>
                <td><?= esc($libro->numero_descarga) ?></td>
                <td>
                    <a href="/dashboard/libreria/ver/<?= esc($libro->id)?>" role="button" class="btn btn-primary">Ver</a>
                    <a href="/dashboard/libreria/editar/<?= esc($libro->id)?>" role="button" class="btn btn-primary">Editar</a>
                    <form action="/dashboard/libreria/eliminar/<?= esc($libro->id)?>" method="post">
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $pager->links() ?>

<?= $this->endSection() ?>
