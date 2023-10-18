<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>
<body>
    <?= view('Dashboard/mensaje')?>
    <?= view('Dashboard/error')?>
    <form action="<?= route_to('usuario.register_post')?>" method="post">
    <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario"></input>
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo"></input>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena"></input>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>