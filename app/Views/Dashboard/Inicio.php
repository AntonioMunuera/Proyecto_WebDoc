
<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>


<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido a WebDoc!</h1>
        <p class="lead">El lugar perfecto para descargar y compartir juegos, libros, imágenes y mucho más.</p>
        <hr class="my-4">
        <p>Explora la vasta colección de archivos compartidos por la comunidad o comparte tus propios archivos con el mundo.</p>
        <a class="btn btn-primary btn" href="<?= route_to('libreria.index')?>" role="button">Explorar Librería</a>
    </div>
    <br>
    

    <div class="container mt-4">
    <div class="row">
        <?php foreach ($categorias as $categoria) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="/images/categoria/<?= $categoria->imagen ?>" class="card-img-top" alt="<?= $categoria->nombre ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $categoria->nombre ?> </h5>
                        <p class="card-text"><?= $categoria->descripcion ?></p>
                        <a href="/categoria/ver/<?= $categoria->id_categoria ?>" class="btn btn-outline-primary">Ver más</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
</div>
      
    </div>
</div>
   
    <?= $this->endSection() ?>

