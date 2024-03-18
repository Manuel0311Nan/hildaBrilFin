<section>
    <article  style="position: relative;">
    <div class="fotoBackgroundNovia" id="fotoPortada">
        <div class="textoFotoPortada w-100" id="textoFotoPortada" >
            <p class="text-center titleSection" id="titleSection">Vestidos de novia</p>
        </div>
    </div>
    <!-- <h1 class="text-center titleSection" style=" font-size: 100px">Reciclaje de vestidos</h1> -->
    </article>
    <article class="mt-5">
        <div class="d-flex flex-row justify-content-around">
            <div class="col-xl-6 d-flex flex-column justify-content-between align-items-end">
                <p class="textDescription">
                Nos especializamos en trajes exclusivos.
                Evaluamos su personalidad y sus preferencias desde el principio para poder asesorarle de la manera mas eficiente. 
                </p>
                <p class="textDescription">
                Trabajamos con cuerpotipos y toiles. Además contamos con maniquies ajustables a sus medidas que nos permiten trabajar con novias a distancia. 
                </p>
                <p class="textDescription text-center">
                Mi misión es que el día de la boda sea único e inolvidable.
                </p>
                <a href="contacto" class="btnInstagram w-75 m-auto my-4"> <span class="textButton p-1 p-lg-0">Transmítenos tu idea</span> </a>
            </div>
            <div class="col-md-4 d-xl-block d-none">
                <div class="imagenImportantSection">
                    <img class="fotosHomeNovia" src="<?= base_url()?>public/images/novia_chimenea.jpg" alt="novia_chimenea">
                </div>
            </div>
        </div>
    </article>
    <article>
        <h3 class="titleGallery"style=" font-size: 50px">Galería</h3>
        <div class="galeria-contenedor">
            <div class="galeria-imagenes">
            <?php foreach ($vestidosNovia as $novia): ?>
                <div class="div-img">
                    <img class="fotosHome" src="<?= base_url() . 'public/images/' . $novia->imagen_principal; ?>" alt="">
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </article>
</section>
