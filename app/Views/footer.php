<?php
$url = getenv('app.baseURL');
?>
</main>
<footer class=" footerArticle">
    <div class=" d-flex flex-column flex-md-row justify-content-center align-items-md-start">
        <div class="col-lg-4">
           <h4 class="text-center" style="font-size: 50px;">Redes Sociales</h4>
           <ul class="d-flex flex-column justify-content-center align-items-center px-0">
                <li><a class="apartadosFooter text-center" href="#">Instagram</a></li>
           </ul>
        </div>
        <div class="col-lg-5 ">
        <a class="logoLink" href="<?= base_url()?>">
          <img class="logoFooter" src="<?= base_url()?>/public/images/Hilda_Bril.png" alt="instagramLogo">
        </a>
        </div>
        <div class="col-lg-4">
        <h4 class="text-center" style="font-size: 50px;">Servicios</h4>
        <ul class="d-flex flex-column justify-content-center align-items-center px-0">
            <li><a class="apartadosFooter text-center" href="novia">Vestidos de novia</a></li>
            <li><a class="apartadosFooter text-center" href="square">Vestidos de Noche Exclusivos</a></li>
            <li><a class="apartadosFooter text-center" href="reciclaje">Reciclaje de vestidos</a></li>
        </ul>

        </div>
    </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script defer src="<?= base_url()?>/public/bootstrap/js/bootstrap.min.js"></script>
<?php if (isset($archivo_js)): ?>
        <script src="<?= base_url('/public/js/' . $archivo_js) ?>"></script>
    <?php endif; ?>
</body>
</html>