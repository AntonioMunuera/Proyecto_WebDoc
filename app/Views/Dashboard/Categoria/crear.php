<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <form action="/dashboard/categoria/guardar" method="post">
        <label for="nombre">Titulo:</label>
        <input type="text" name="nombre" placeholder="Nombre de Categoria" id="nombre" value="<?= old('nombre')?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion')?></textarea>
        <button type="submit">Crear</button>
    



    </form>
    
<?= $this->endSection() ?>