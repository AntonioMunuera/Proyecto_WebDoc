<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>
    <form action="<?= route_to('usuario.register_post')?>" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario"></input>
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo"></input>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena"></input>
        <button type="submit">Registrarse</button>
    </form>
<?= $this->endSection() ?>
