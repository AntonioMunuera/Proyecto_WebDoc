<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow" style="border-color: #cbdbe5;">
                <div class="card-header" style="background-color: #cbdbe5; color: #1b2530;">
                    <h3 class="mb-0">Crear Librería</h3>
                </div>
                <div class="card-body" style="color: #1b2530;">
                    <form action="/libreria/guardar" method="post">
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título" value="<?= old('titulo') ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_categoria">Categoría:</label>
                            <select name="id_categoria" id="id_categoria" class="form-control">
                                <option value="">Seleccione una categoría</option>
                                <?php  foreach ($categoria as $categoriaItem) : ?>
                                    <option value="<?= $categoriaItem->id_categoria?>"><?= $categoriaItem->nombre?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="4"><?= old('descripcion') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
