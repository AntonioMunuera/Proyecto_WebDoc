<?= $this->extend('/Dashboard/Layout/header') ?>



<?= $this->Section('content') ?>
    <form action="<?= route_to('usuario.login_post')?>" method="post">
    <label for="correo">Correo/Usuario</label>
        <input type="text" name="correo" id="correo"></input>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena"></input>
        <button type="submit">Iniciar Sesion</button>
    </form>
    <?= $this->endSection() ?>
