<?php
// Conectar a la base de datos
require_once ('../libs/conexion/conOra.php');
$link = Conexion::conectar();

$Sql = "SELECT A.V_LINK, A.V_NOMBRE FROM AD_SGC_AUDIOVISUAL A ORDER BY A.IID_VIDEO ASC";
$stid = oci_parse($link, $Sql);
oci_execute($stid);

// Array para almacenar los resultados
$videos = array();

// Fetch all rows and push to the array
while (($row = oci_fetch_assoc($stid)) != false) {
    $videos[] = $row;
}

// Cerrar la conexión
oci_free_statement($stid);
oci_close($link);

// Retornar los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($videos);
?>
