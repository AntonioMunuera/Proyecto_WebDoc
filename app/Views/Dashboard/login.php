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
    <form action="<?= route_to('usuario.login_post')?>" method="post">
    <label for="correo">Correo/Usuario</label>
        <input type="text" name="correo" id="correo"></input>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena"></input>
        <button type="submit">Iniciar Sesion</button>
    </form>
</body>
</html>