<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/dashboard/libreria/actualizar/<?= esc($libros->id)?>" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" placeholder="Titulo" id="titulo" value="<?= esc($libros->titulo) ?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= esc($libros->descripcion) ?></textarea>
        <button type="submit">Editar</button>
    



    </form>
</body>
</html>