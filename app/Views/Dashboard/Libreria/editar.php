<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <form action="/dashboard/libreria/actualizar/<?= esc($libros->id)?>" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" placeholder="Titulo" id="titulo" value="<?= old('titulo', esc($libros->titulo)) ?>">
        <label for="id_categoria">Categoría</label>
        <select name="id_categoria" id="id_categoria">
            <option value=""></option>
            <?php  foreach ($categoria as $categoria) : ?>

                <option <?= $categoria->id_categoria !== old('id_categoria', esc($libros->id_categoria))?: 'selected' ?> value="<?= $categoria->id_categoria?>"><?= $categoria->nombre?></option>

            <?php endforeach ?>
               
            
            
            
            

        </select>
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion', esc($libros->descripcion)) ?></textarea>
        <button type="submit">Editar</button>
    



    </form>

<?= $this->endSection() ?>