<!DOCTYPE html>
<html lang = "es">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../libs/js/verPDF.js"></script>
    <?php include_once('../layout/menu.html'); ?>
    </head>

    <body>
        <div class = "container">
            <h1>ORGANIGRAMA GENERAL</h1>
        </div>
        <div id = "visor-pdf">
        <script>
            url('../docs/ORGANIGRAMA_GENERAL.html');
        </script>
        <div>
        <iframe id="pdfViewer13" width="95%" height="670" frameborder="0"></iframe>          
        </div>
        <div class="botones">
		<button id="zoomInButton">+</button>
		<button id="zoomOutButton">-</button>

	</div>
    </body>
    
</html>

