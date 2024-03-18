$(document).ready(function(){
    $('.div-img').click(function() {
        var idImagen = $(this).data('id'); 
        $.ajax({
            url: 'Galeria/obtenerDetallesImagen/' + idImagen,
            type: 'GET',
            dataType: 'application/json',
            success: function(response) {
                $('#modalBody').empty(); 
                response.forEach(function(detalle) {
                    var contenido = `
                    <img src="${detalle.imagen}" alt="Detalle">
                    <p>${detalle.texto}</p>`;
                    $('#modalBody').append(contenido); 
                });
                $('#modalGenerico').modal('show'); 
            }
        }).fail(function(jqXHR, textStatus, errorThrown) { 
            console.error("Error en la solicitud AJAX: " + textStatus + ", " + errorThrown);
            alert("Ocurrió un error al cargar los detalles: " + textStatus + ". Por favor, inténtalo de nuevo.");

        });
    });
});

