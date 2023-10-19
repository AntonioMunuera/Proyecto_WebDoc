<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <h1><?= esc($libros->titulo) ?></h1>
    <p><?= esc($libros->descripcion) ?></p>

<?= $this->endSection() ?>