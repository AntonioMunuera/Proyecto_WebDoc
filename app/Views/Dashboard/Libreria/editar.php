<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <form action="/dashboard/libreria/actualizar/<?= esc($libros->id)?>" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" placeholder="Titulo" id="titulo" value="<?= old('titulo', esc($libros->titulo)) ?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion', esc($libros->descripcion)) ?></textarea>
        <button type="submit">Editar</button>
    



    </form>

<?= $this->endSection() ?>