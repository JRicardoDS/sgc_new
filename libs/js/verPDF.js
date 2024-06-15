   var ruta ='';

   function opcion(num) {
        
        console.log(num);

        switch (num) {
            case '01':
                ruta = '';
            break;
            case '02':
                ruta = '';
            break;
            case '03':
                ruta = '';
            break;
            case '04':
                ruta = '';
            break;
            case '05':
                ruta = '';
            break;
            case '06':
                ruta = '';
            break;
            case '07':
                title = 'TITULO DE PRUEBA';
                ruta = '../docs/ORGANIGRAMA_GENERAL.html';
                console.log('caso: '+ mum + 'ruta en switch: '+ruta);
            break;
            default:
                break;
        }
   }

//    function url(url){
//         ruta = url;
//         // console.log($ruta);
//     }

document.addEventListener('DOMContentLoaded', function() {
    var htmlViewer = document.getElementById('pdfViewer13');
    var zoomInButton = document.getElementById('zoomInButton');
    var zoomOutButton = document.getElementById('zoomOutButton');
    var zoomInterval; // Variable para almacenar el intervalo de zoom
    
    // Función para aumentar el zoom
    function zoomIn() {
        htmlViewer.contentWindow.document.body.style.zoom = parseFloat(htmlViewer.contentWindow.document.body.style.zoom || 1) + 0.1;
    }

    // Función para disminuir el zoom
    function zoomOut() {
        htmlViewer.contentWindow.document.body.style.zoom = parseFloat(htmlViewer.contentWindow.document.body.style.zoom || 1) - 0.1;
    }

    // Evento de mousedown para el botón de Zoom In
    zoomInButton.addEventListener('mousedown', function() {
        zoomIn();
        // Iniciar el intervalo para aumentar el zoom mientras se mantenga presionado el botón
        zoomInterval = setInterval(zoomIn, 100); // Ajusta el intervalo según lo desees
    });

    // Evento de mouseup para detener el zoom continuo
    zoomInButton.addEventListener('mouseup', function() {
        clearInterval(zoomInterval);
    });

    // Evento de mousedown para el botón de Zoom Out
    zoomOutButton.addEventListener('mousedown', function() {
        zoomOut();
        // Iniciar el intervalo para disminuir el zoom mientras se mantenga presionado el botón
        zoomInterval = setInterval(zoomOut, 100); // Ajusta el intervalo según lo desees
    });

    // Evento de mouseup para detener el zoom continuo
    zoomOutButton.addEventListener('mouseup', function() {
        clearInterval(zoomInterval);
    });

    // Detener el intervalo cuando se sale del botón
    zoomInButton.addEventListener('mouseout', function() {
        clearInterval(zoomInterval);
    });

    zoomOutButton.addEventListener('mouseout', function() {
        clearInterval(zoomInterval);
    });

      
      htmlViewer.src = ruta;
      console.log('la ruta es: '+ruta);
});


    