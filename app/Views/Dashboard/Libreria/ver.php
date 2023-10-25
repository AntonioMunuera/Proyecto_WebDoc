<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <h1><?= esc($libros->titulo) ?></h1>
    <p><?= esc($libros->descripcion) ?></p>

    <form action="/dashboard/comentarios/agregar" method="post">
    <input type="hidden" name="id_libro" value="<?= $libros->id ?>">
    
    
    <div class="form-group">
        <label for="contenido">Comentario:</label>
        <textarea id="contenido" name="contenido" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Publicar comentario</button>
</form>
<section style="background-color: #ad655f;">
<div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">
          <div class="card-body p-4">
            <h4 class="mb-0">Recent comments</h4>
<?php foreach ($comentarios as $comentario) : ?>
    <div class="comentario">
        <strong><?= esc($comentario->usuario) ?>:</strong> 
        <?= esc($comentario->contenido) ?> 
    </div>
<?php endforeach; ?>
</section>



<?= $this->endSection() ?>