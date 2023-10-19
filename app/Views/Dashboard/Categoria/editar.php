<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <form action="/dashboard/categoria/actualizar/<?= esc($categorias->id_categoria)?>" method="post">
        <label for="nombre">Titulo:</label>
        <input type="text" name="nombre" placeholder="nombre" id="nombre" value="<?= old('nombre', esc($categorias->nombre)) ?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion', esc($categorias->descripcion)) ?></textarea>
        <button type="submit">Editar</button>
    



    </form>

<?= $this->endSection() ?>
