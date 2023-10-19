
<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>
<div class="card card-header"><h1>Listado de Categorias</h1></div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Descripción</th>
                <th>Ver/Editar/Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <a href="/dashboard/categoria/crear" role="button" class="btn btn-primary">Crear</a>
            <?php foreach ($categorias as $categorias): ?>
                
                <tr>
                    <td><?= esc($categorias->id_categoria) ?></td>
                    <td><?= esc($categorias->nombre) ?></td>
                    <td><?= esc($categorias->descripcion) ?></td>                 
                    <td><a class="btn btn-primary"  role="button" href="/dashboard/categoria/ver/<?= esc($categorias->id_categoria)?>">Ver</a>
                        <a href="/dashboard/categoria/editar/<?= esc($categorias->id_categoria)?>" class="btn btn-primary"  role="button">Editar</a>
                        <form action="/dashboard/categoria/eliminar/<?= esc($categorias->id_categoria)?>" method="post">
                            <button class="btn btn-danger" type="submit">Borrar</button>
                        </form>
                    </td>
                    
                    
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <?= $this->endSection() ?>
