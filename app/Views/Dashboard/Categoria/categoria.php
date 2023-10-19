<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
        }
        th {
            background-color: #f2f2f2;
        }
        td{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <h1>Página de Categoria</h1>
   <h2> <?= view('/dashboard/mensaje')?> </h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Descripción</th>
                <th>Ver/Editar/Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <a href="/dashboard/categoria/crear">Crear</a>
            <?php foreach ($categorias as $categorias): ?>
                
                <tr>
                    <td><?= esc($categorias->id_categoria) ?></td>
                    <td><?= esc($categorias->nombre) ?></td>
                    <td><?= esc($categorias->descripcion) ?></td>                 
                    <td><a href="/dashboard/categoria/ver/<?= esc($categorias->id_categoria)?>">Ver</a>
                        <a href="/dashboard/categoria/editar/<?= esc($categorias->id_categoria)?>">Editar</a>
                        <form action="/dashboard/categoria/eliminar/<?= esc($categorias->id_categoria)?>" method="post">
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                    
                    
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
