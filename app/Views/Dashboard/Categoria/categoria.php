
<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>


    <table class="table">
        <thead>
            <tr>
                
                <th>Categoria</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        <h1 style="text-align: center;">Listado de Categorias</h1>
        <hr>
        <?php if (session('usuario')->rol == 'admin'): ?>
        <a href="/categoria/crear" role="button" class="btn btn-success" >Crear</a>
        
        <?php endif; ?>
            <?php foreach ($categorias as $categorias): ?>
                
                <tr>
                    
                    <td><?= esc($categorias->nombre) ?></td>
                    <td><?= esc($categorias->descripcion) ?></td>                 
                    <td>
        <a class="btn btn-primary btn-sm" role="button" href="/categoria/ver/<?= esc($categorias->id_categoria)?>">Ver</a>
        <?php if (session('usuario')->rol == 'admin'): ?>
        <a href="/categoria/editar/<?= esc($categorias->id_categoria)?>" class="btn btn-primary btn-sm" role="button">Editar</a>
        <form action="/categoria/eliminar/<?= esc($categorias->id_categoria)?>" method="post" style="display: inline-block;">
        <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
        </form>
        <?php endif; ?>
        </td>
                    
                    
                    
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <?= $this->endSection() ?>
