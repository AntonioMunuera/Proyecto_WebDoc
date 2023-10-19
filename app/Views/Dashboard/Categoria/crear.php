<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= view('Dashboard/error')  ?>
    <form action="/dashboard/categoria/guardar" method="post">
        <label for="nombre">Titulo:</label>
        <input type="text" name="nombre" placeholder="Nombre de Categoria" id="nombre" value="<?= old('nombre')?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion')?></textarea>
        <button type="submit">Crear</button>
    



    </form>
</body>
</html>