<?php $categorias = session()->get('categorias'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDoc</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  
  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    
}
#miNavbar {
  border-bottom: 2px solid #b0c7d1;
}

footer {
    margin-top: auto;
}
img.logo {
    height: 100px;
    width: 100px;  /* mantiene la proporción original */
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link:focus,
.nav .nav-link:hover,
.nav .nav-link:focus {
  transform: scale(1.2);
  color: #1b2530; /* O el color que prefieras */
  transition: all 0.3s ease;
}

.navbar-nav .nav-link,
.nav .nav-link {
  transition: all 0.3s ease;
}

</style>
</head>

    <header>
        
    
    <nav class="navbar navbar-expand-lg" id="miNavbar" style="background-color: #cbdbe5;">
  <div class="container-fluid">
  <img src="/images/logo.jpeg" alt="Logo" class="logo" >

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=route_to('inicio.index')?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=route_to('libreria.index')?>">Libreria</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=route_to('categoria.index')?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php foreach ($categorias as $categorias) : ?>
          <a class="dropdown-item" href="/dashboard/categoria/ver/<?= $categorias->id_categoria ?>"><?= $categorias->nombre ?></a>
<?php endforeach ?>
          
          
        </div>
      </li>
        <li class="nav-item">
          <a href="<?=route_to('acercade.index')?>" class="nav-link" >Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=route_to('contacto.index')?>">Contacto</a>
        </li>
      </ul>
      <!-- ... Resto del código ... -->

<ul class="nav justify-content-end">

<?php if(session()->has('usuario')): ?> <!-- Si el usuario ha iniciado sesión -->

<li class="nav-item">
    <span class="nav-link">Bienvenido, <?= session('usuario')->usuario ?></span>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= route_to('usuario.logout') ?>">Salir de sesión</a>
</li>

<?php else: ?> <!-- Si el usuario no ha iniciado sesión -->

<li class="nav-item">
    <a class="nav-link" style="color: #444c6c ;" href="<?= route_to('usuario.register') ?>">Registrarse</a>
</li>
<li class="nav-item">
    <a class="nav-link" style="color: #444c6c ;" href="<?= route_to('usuario.login') ?>">Iniciar Sesion</a>
</li>

<?php endif; ?>

</ul>

<!-- ... Resto del código ... -->

    </div>
  </div>
</nav>
</header>

<body class="d-flex flex-column min-vh-100" style="background-color: #f9fafb;">
<?= view('Dashboard/mensaje')?>
<?= view('Dashboard/error')?>
<div class="container mt-4">
   
  <div class="card">
        <div class="card-body">
        <?= $this->renderSection('content') ?>
        </div>
    </div>
    <div>
    </div>
</div>

</body>
<footer class="bg-dark text-white py-3 mt-auto" style="background-color: #343a40;">
    <div class="container text-center">
        <p>© 2023 Mi Sitio. Todos los derechos reservados.</p>
    </div>
</footer>