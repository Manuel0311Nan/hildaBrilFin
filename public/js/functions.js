window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    var texto = document.getElementById('textoFotoPortada');
    var efectsImagen = document.getElementById('fotoPortada');
    var titleSectionSt = document.getElementById('titleSection');

    if (scrollPosition > 150) { 
        texto.classList.add('animate__animated');
        texto.classList.add('animate__fadeInUp');
        texto.classList.add('texto-visible');

        titleSectionSt.classList.add('titleSectionSticky');

        efectsImagen.classList.add('imagen-scroll');
    } else {
        texto.classList.remove('texto-visible');
        efectsImagen.classList.remove('imagen-scroll');
        titleSectionSt.classList.remove('titleSectionSticky');
    }
});

