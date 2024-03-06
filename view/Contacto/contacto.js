$(document).ready(function() {


    $.ajax({
        type: 'POST',
        url: '../../controller/articulocontrolador.php?op=listar_ultimos', 
        dataType : 'JSON',
        success: function(data) {
            //$('#respuesta').html(response); // Mostrar la respuesta del servidor en un div
            console.log(data);

            data.forEach(function(post) {
                var html = '<div class="item">';
                html += '<img src="../../assets/img/' + post.thumb + '" alt="' + post.titulo + '" class="post-image post-image-left">';
                html += '<div class="info-post">';
                html += '<h5><a href="#" onclick="Seguir('+post.id+')">' + post.titulo + '</a></h5>';
                html += '<span class="date">' + formatearFecha(post.fecha) + '</span>';
                html += '</div>';
                html += '<div class="clearfix"></div>';
                html += '</div>';
                
                $('#post-container').append(html);
            });
            
            
            
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Manejo de errores
        }
    });
});

function formatearFecha(valor) {

    var fecha = new Date(valor);
    // Definir los nombres de los meses en español
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    // Obtener el día, mes y año de la fecha
    var dia = fecha.getDate();
    var mes = meses[fecha.getMonth()];
    var anio = fecha.getFullYear();

    // Crear la cadena de texto formateada
    var fechaFormateada = dia + " " + mes + " de " + anio;

    // Retornar la fecha formateada
    return fechaFormateada;
}

// Función para agregar la clase 'active' al enlace correspondiente
function setActiveLink() {
    var currentUrl = window.location.href;
    var links = document.querySelectorAll('.masterpb-menu a');

    links.forEach(function(link) {
        if (link.href === currentUrl) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Ejecutar la función al cargar la página
window.onload = setActiveLink;
