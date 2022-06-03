<?php
include('conexion.php');

//
if (isset($_POST['enviar'])) {
    $CostoEnvio = 5;
    $DireccionEnvio = $_POST['direccionE'];
    $CodigoPostal = $_POST['codigoP'];
    $Referencia = $_POST['referenciaE'];
    $query = "CALL pa_agregar_Informacion_Envio('$DireccionEnvio', '$CodigoPostal', '$Referencia')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
      die("Fallo al registrar.");
    }

    header('Location: Pago.html');

}

?>