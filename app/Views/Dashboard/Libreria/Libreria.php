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
            background-color: darkslategrey;
        }
        td{
            background-color: darkcyan;
        }
    </style>
</head>
<body>
    <h1>Página de Librería</h1>
   <h2> <?= view('/dashboard/mensaje')?> </h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Fecha de Subida</th>
                <th>Nº de Descargas</th>
                <th>Ver/Editar/Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <a href="/dashboard/libreria/crear">Crear</a>
            <?php foreach ($libros as $libros): ?>
                
                <tr>
                    <td><?= esc($libros->id) ?></td>
                    <td><?= esc($libros->titulo) ?></td>
                    <td><?= esc($libros->descripcion) ?></td>                 
                    <td><?= esc($libros->fecha_subida) ?></td>
                    <td><?= esc($libros->numero_descarga) ?></td> 
                    <td><a href="/dashboard/libreria/ver/<?= esc($libros->id)?>">Ver</a>
                        <a href="/dashboard/libreria/editar/<?= esc($libros->id)?>">Editar</a>
                        <form action="/dashboard/libreria/eliminar/<?= esc($libros->id)?>" method="post">
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                    
                    
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
