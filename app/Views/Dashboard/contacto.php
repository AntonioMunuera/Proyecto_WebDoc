<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="text-center mb-5">Contáctanos</h1>
    <p class="lead text-center">¿Tienes preguntas o sugerencias? ¡Nos encantaría escuchar de ti!</p>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <h2>Información de Contacto</h2>
            <address>
                <strong>WebDoc</strong><br>
                1234 Calle Principal<br>
                Ciudad, Provincia, 56789<br>
                Tel: (123) 456-7890<br>
                Email: contacto@webdoc.com
            </address>

            <h3>Síguenos en redes sociales</h3>
            <ul class="list-unstyled">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>

        <div class="col-md-6">
            <h2>Envíanos un mensaje</h2>
            <form action="/ruta_de_envio" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>