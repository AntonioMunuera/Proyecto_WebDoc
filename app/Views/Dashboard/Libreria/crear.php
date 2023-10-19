<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <form action="/dashboard/libreria/guardar" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" placeholder="Titulo" id="titulo" value="<?= old('titulo')?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion')?></textarea>
        <button type="submit">Crear</button>
    



    </form>

<?= $this->endSection() ?>