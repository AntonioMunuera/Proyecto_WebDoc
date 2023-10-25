
<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busca en WebDoc" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido a WebDoc!</h1>
        <p class="lead">El lugar perfecto para descargar y compartir juegos, libros, imágenes y mucho más.</p>
        <hr class="my-4">
        <p>Explora la vasta colección de archivos compartidos por la comunidad o comparte tus propios archivos con el mundo.</p>
        <a class="btn btn-primary btn-lg" href="<?= route_to('libreria.index')?>" role="button">Explorar Librería</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="ruta_imagen_juegos" class="card-img-top" alt="Juegos">
                <div class="card-body">
                    <h5 class="card-title">Juegos</h5>
                    <p class="card-text">Descubre y descarga los últimos juegos compartidos por la comunidad.</p>
                    <a href="#" class="btn btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <img src="ruta_imagen_libros" class="card-img-top" alt="Libros">
                <div class="card-body">
                    <h5 class="card-title">Libros</h5>
                    <p class="card-text">Explora nuestra selección de libros en diversos géneros y temáticas.</p>
                    <a href="#" class="btn btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <img src="ruta_imagen_imagenes" class="card-img-top" alt="Imágenes">
                <div class="card-body">
                    <h5 class="card-title">Imágenes</h5>
                    <p class="card-text">Navega por nuestras galerías de imágenes subidas por la comunidad.</p>
                    <a href="#" class="btn btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>
   
    <?= $this->endSection() ?>

