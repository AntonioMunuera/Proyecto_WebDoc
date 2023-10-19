<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

    <h1><?= esc($categorias->nombre) ?></h1>
    <p><?= esc($categorias->descripcion) ?></p>

<?= $this->endSection() ?>
