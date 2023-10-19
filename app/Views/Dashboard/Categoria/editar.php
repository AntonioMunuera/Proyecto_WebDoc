<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= view('Dashboard/error')  ?>
    <form action="/dashboard/categoria/actualizar/<?= esc($categorias->id_categoria)?>" method="post">
        <label for="nombre">Titulo:</label>
        <input type="text" name="nombre" placeholder="nombre" id="nombre" value="<?= old('nombre', esc($categorias->nombre)) ?>">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion"><?= old('descripcion', esc($categorias->descripcion)) ?></textarea>
        <button type="submit">Editar</button>
    



    </form>
</body>
</html>