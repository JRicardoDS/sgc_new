<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC</title>
    
    <!--Librerias de bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--Estilos de cultura organizacional-->
    <link rel="stylesheet" href="../libs/css/styleMaterialAudioVisual.css">  
    
    <?php include_once('../layout/menu.html'); ?>
</head>
<body>
    <section>
        <div class="container">
            <!-- Contenedor para el menú -->
            <main class="recipienteAudio">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" id="carousel-content">
                        <!-- El contenido del carrusel se agregará aquí dinámicamente -->
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </main>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
    // Cargar el menú cuando la ventana se ha cargado
    $(window).on('load', function() {
        console.log('Window loaded!');
        // Realizar una petición AJAX para obtener los videos
        $.ajax({
            url: '../controller/materialAudioVisual.php', // URL del archivo PHP
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var carouselContent = '';
                if (data.length > 0) {
                    data.forEach(function(video, index) {
                        var activeClass = index === 0 ? 'active' : '';
                        carouselContent += `
                            <div class="carousel-item ${activeClass}">
                                <h1 class="nombre-centrado"><center>${video.V_NOMBRE}</center></h1>
                                <iframe class="d-block w-100" src="${video.V_LINK}" width="640" height="480" allow="autoplay"></iframe>
                            </div>
                        `;
                    });
                } else {
                    carouselContent = `
                        <div class="carousel-item active">
                            <h5 class="nombre-centrado">No se encontraron videos.</h5>
                        </div>
                    `;
                }
                // Agregar el contenido al carrusel
                $('#carousel-content').html(carouselContent);
                // Inicializar el carrusel
                $('#myCarousel').carousel();
            },
            error: function(xhr, status, error) {
                console.error('Error al cargar los videos:', status, error);
                alert('Error al cargar los videos.');
            }
        });
    });
    </script>
</body>
</html>
