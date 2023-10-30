<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">Mi Perfil</h1>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4" >
            <div class="card" style="background-color: #cbdbe5;">
            <img src="<?= esc($usuario->imagen ? base_url('/images/usuario/' . $usuario->imagen) : base_url('/images/usuario/img_predeterminada.png')) ?>" class="card-img-top rounded-circle" alt="<?= esc($usuario->usuario) ?>" style="width: 130px; height: 130px; object-fit: cover; border-radius: 50%; margin: 0 auto;">

                <div class="card-body">
                    <h2 class="card-title" style="text-align: center"><?= esc($usuario->usuario) ?></h2>
                    <p class="card-text" style="text-align: center"><?= esc($usuario->correo) ?></p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form action="/usuario/actualizar-perfil" method="post" enctype="multipart/form-data">
               
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?= esc($usuario->usuario) ?>">
                </div>
                
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="<?= esc($usuario->correo) ?>">
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Actualizar Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>





