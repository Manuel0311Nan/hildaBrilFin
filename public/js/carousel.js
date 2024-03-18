window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    var texto = document.getElementById('textoFotoPortada');
    var efectsImagen = document.getElementById('fotoPortada');

    if (scrollPosition > 150) { 
        texto.classList.add('animate__animated');
        texto.classList.add('animate__fadeInUp');
        texto.classList.add('texto-visible');


        efectsImagen.classList.add('imagen-scroll');
    } else {
        texto.classList.remove('texto-visible');
        efectsImagen.classList.remove('imagen-scroll');
    }
});

var myCarousel = document.querySelector('#carouselExample');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 6000,
    wrap: true
});