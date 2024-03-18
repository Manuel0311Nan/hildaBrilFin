<section>
    <article  style="position: relative;">
    <div class="fotoBackground" id="fotoPortada">
        <div class="textoFotoPortada w-100" id="textoFotoPortada">
            <p class="text-center">Hilda Bril</p>
            <p class="text-center second-text-portada">Diseños de alta costura a medida</p>
        </div>
    </div>
    </article>
    <article class="mt-5 row">
        <div class="col-md-4">
            <a href="novia" class="elemSeccion"  id="imagenInicioDos">
                <div class="imagenOptions">
                    <img class="fotosHome" src="<?= base_url()?>public/images/novia_cuadro.jpg" alt="reciclaje">
                    <h2 class="nomSeccion text-center">Vestidos de novia</h2>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="square" class="elemSeccion"  id="imagenInicioTres">
                <div class="imagenOptions">
                    <img class="fotosHome" src="<?= base_url()?>public/images/vestidoRojo.jpg" alt="square">
                    <h2 class="nomSeccion text-center">Vestidos de Noche</h2>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="reciclaje" class="elemSeccion" id="imagenInicioUno">
                <div class="imagenOptions">
                    <img class="fotosHome" src="<?= base_url()?>public/images/reciclaje2.jpg" alt="reciclaje">
                    <h2 class="nomSeccion text-center">Reciclaje de Vestidos</h2>
                </div>
            </a>
        </div>
    </article>
    <article class="tercerArticle">
        <h2 class="text-center mt-2 p-4">Opiniones de nuestros clientes</h2>
    <div id="carouselExample" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach($opiniones as $index => $opinion): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <div class="cards-wrapper">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row">
                                        <!-- <img class="image-wrapper" src="<?= base_url()?>public/images/<?= $opinion->imagen ?>" alt="<?= $opinion->nombre ?>" /> -->
                                        <div class="d-flex flex-row justify-content-center">
                                            <h2 class="mx-2"><?= $opinion->nombre ?></h2>
                                            <h3 class="mx-2"><?= $opinion->apellido1 ?></h3>
                                            <h3 class="mx-2"><?= $opinion->apellido2 ?>:</h3>
                                        </div>
                                    </div>
                                <p class="textOpinion">"<?= $opinion->comentario ?>"</p>
                                </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>



    </article>
</section>