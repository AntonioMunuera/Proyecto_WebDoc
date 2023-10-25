<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>
<div class="card card-header"><h1>Libreria</h1></div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Fecha de Subida</th>
                <th>Valoración</th>
                <th>Ver/Editar/Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <a href="/dashboard/libreria/crear"role="button" class="btn btn-primary">Crear</a>
            <?php foreach ($libros as $libros): ?>
                
                <tr>
                    <td><?= esc($libros->id) ?></td>
                    <td><?= esc($libros->titulo) ?></td>
                    <td><?= esc($libros->categoria) ?></td>
                    <td><?= esc($libros->descripcion) ?></td>                 
                    <td><?= esc($libros->fecha_subida) ?></td>
                    <td><?= esc($libros->numero_descarga) ?></td> 
                    <td><a href="/dashboard/libreria/ver/<?= esc($libros->id)?>"role="button" class="btn btn-primary">Ver</a>
                        <a href="/dashboard/libreria/editar/<?= esc($libros->id)?>"role="button" class="btn btn-primary">Editar</a>
                        <form action="/dashboard/libreria/eliminar/<?= esc($libros->id)?>" method="post">
                            <button type="submit"class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                    
                    
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links()  ?>
    <?= $this->endSection() ?>
