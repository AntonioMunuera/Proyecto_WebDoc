<?= $this->extend('/Dashboard/Layout/header') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4"><?= esc($libros->titulo) ?></h1>
            <p><?= esc($libros->descripcion) ?></p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <form action="/comentarios/agregar" method="post">
                <input type="hidden" name="id_libro" value="<?= $libros->id ?>">

                <div class="mb-3">
                    <label for="contenido" class="form-label">Comentario:</label>
                    <textarea id="contenido" name="contenido" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publicar comentario</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <section style="background-color: #cbdbe5;">
                <div class="container my-5 py-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="card text-dark">
                                <div class="card-body p-4">
                                    <h4 class="mb-0">Comentarios Recientes</h4>
                                    <ul class="list-unstyled">
                                        <?php foreach ($comentarios as $comentario) : ?>
                                            <li class="media my-4">
                                                <img src="/images/usuario/<?= session('usuario')->imagen ?>" class="mr-3 rounded-circle" alt="imagen de usuario" style="width: 64px; height: 64px;">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1"><?= session('usuario')->usuario ?></h5>
                                                    <?= esc($comentario->contenido) ?>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<section class="gradient-custom">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="text-center mb-4 pb-2">Nested comments section</h4>

            <div class="row">
              <div class="col">
                <div class="d-flex flex-start">
                  <img class="rounded-circle shadow-1-strong me-3"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65"
                    height="65" />
                  <div class="flex-grow-1 flex-shrink-1">
                    <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">
                          Maria Smantha <span class="small">- 2 hours ago</span>
                        </p>
                        <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                      </div>
                      <p class="small mb-0">
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page.
                      </p>
                    </div>

                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="rounded-circle shadow-1-strong"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-1">
                              Simona Disa <span class="small">- 3 hours ago</span>
                            </p>
                          </div>
                          <p class="small mb-0">
                            letters, as opposed to using 'Content here, content here',
                            making it look like readable English.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="rounded-circle shadow-1-strong"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-1">
                              John Smith <span class="small">- 4 hours ago</span>
                            </p>
                          </div>
                          <p class="small mb-0">
                            the majority have suffered alteration in some form, by
                            injected humour, or randomised words.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex flex-start mt-4">
                  <img class="rounded-circle shadow-1-strong me-3"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                    height="65" />
                  <div class="flex-grow-1 flex-shrink-1">
                    <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">
                          Natalie Smith <span class="small">- 2 hours ago</span>
                        </p>
                        <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                      </div>
                      <p class="small mb-0">
                        The standard chunk of Lorem Ipsum used since the 1500s is
                        reproduced below for those interested. Sections 1.10.32 and
                        1.10.33.
                      </p>
                    </div>

                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="rounded-circle shadow-1-strong"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-1">
                              Lisa Cudrow <span class="small">- 4 hours ago</span>
                            </p>
                          </div>
                          <p class="small mb-0">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                            scelerisque ante sollicitudin commodo. Cras purus odio,
                            vestibulum in vulputate at, tempus viverra turpis.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="rounded-circle shadow-1-strong"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(29).webp" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-1">
                              Maggie McLoan <span class="small">- 5 hours ago</span>
                            </p>
                          </div>
                          <p class="small mb-0">
                            a Latin professor at Hampden-Sydney College in Virginia,
                            looked up one of the more obscure Latin words, consectetur
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="rounded-circle shadow-1-strong"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-1">
                              John Smith <span class="small">- 6 hours ago</span>
                            </p>
                          </div>
                          <p class="small mb-0">
                            Autem, totam debitis suscipit saepe sapiente magnam officiis
                            quaerat necessitatibus odio assumenda, perferendis quae iusto
                            labore laboriosam minima numquam impedit quam dolorem!
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>