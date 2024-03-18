
<section>
<article>
        <h1 class=" title-reciclaje">Vestidos de noche</h1>
    </article>
    <article class="mt-5">
        <div class="row mx-auto">
            <div class="col-xl-5 d-flex flex-column align-items-end p-3">
                <p class="textDescription">
                Siempre pensados en destacar la figura, de acuerdo al lugar donde se celebre el evento. 
                </p>
                <p class="textDescription">
                Nuestros vestidos son el resultado de una meticulosa selección de tejidos, colores y detalles, todos elegidos para asegurar que cada cliente brille con luz propia.
                </p>
                <a href="contacto" class="btnInstagram w-75 m-auto my-4"> <span class="textButton p-1 p-lg-0">Transmítenos tu idea</span> </a>
            </div>
            <div class="col-md-3 d-xl-block">
                <div class="imagenDetailSquare">
                    <img class="fotosHome" src="<?= base_url()?>public/images/vestidoRojo.jpg" alt="square">
                </div>
            </div>
            <div class="col-md-4 d-xl-block d-none">
                <div class="imagenDetailSquare">
                    <img class="fotosHome" src="<?= base_url()?>public/images/vestidoVerde.jpg" alt="square">
                </div>
                
            </div>
        </div>
    </article>
    <article>
        <h3 class="titleGallery">Galería</h3>
        <h3 class="infoGallery">Puede ver el detalle del diseño clicando en cada foto</h3>
        <div class="galeria-contenedor">
            <div class="galeria-imagenes">
            <?php foreach ($vestidosNoche as $vestidos): ?>
                <div class="div-img" data-toggle="modal" data-id="<?=$vestidos ->id; ?>" data-target="#modalGenerico" data-descripcion="Descripción de <?= $vestidos ->imagen_principal; ?>">
                    <img class="fotosHomeSquare" src="<?= base_url() . 'public/images/' . $vestidos ->imagen_principal; ?>" alt=""
                     data-detalle="<?= base_url() . 'public/images/' . str_replace(".jpg", "Detalle.jpg", $vestidos ->imagen_principal); ?>">
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </article>
<div class="modal fade" id="modalGenerico" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Detalles de la Imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</section>
