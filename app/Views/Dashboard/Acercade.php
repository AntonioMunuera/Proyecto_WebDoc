<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Título principal -->
            <h2 class="text-center mb-5 display-4 text-primary">📘 Acerca de WebDoc 📁</h2>

            <!-- Tarjeta principal -->
            <div class="card shadow mb-5">
                <div class="card-body">
                    <p class="lead">🔍 WebDoc es tu plataforma de confianza para compartir y descubrir contenido.</p>
                    <p>🌐 Busca libros, juegos, imágenes inspiradoras y más. 🎉</p>
                    <p>🚀 Una comunidad comprometida con el aprendizaje, la creatividad y el intercambio. 🎨</p>
                    <p>❤️ Celebramos la diversidad de contenidos y te damos la bienvenida a nuestro espacio. 🌏</p>
                    <p>🙏 ¡Gracias por ser parte de WebDoc!</p>
                </div>
            </div>

            <!-- Tarjeta de Políticas y Privacidad -->
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">🔒 Políticas de Privacidad</h3>
                </div>
                <div class="card-body">
                    <p>Valoramos y respetamos tu privacidad. Te invitamos a leer nuestra <a href="link-a-tu-documento-de-politicas" class="text-primary font-weight-bold">política de privacidad completa</a> y conocer cómo protegemos tus datos. 🛡️</p>
                </div>
            </div>

            <!-- Tarjeta de Términos y Condiciones -->
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">📜 Términos y Condiciones</h3>
                </div>
                <div class="card-body">
                    <p>Al utilizar WebDoc, aceptas nuestros <a href="link-a-tu-documento-de-terminos" class="text-primary font-weight-bold">términos y condiciones</a>. Conoce tus derechos y responsabilidades como usuario. 🤝</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
