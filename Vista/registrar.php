<?php
include('conexion.php');

if (isset($_POST['registrar'])) {
    $nombre = $_POST['fnom'];
    $apellido = $_POST['fape'];
    $dni = $_POST['fdni'];
    $correo = $_POST['fcorreo'];
    $contraseña = $_POST['fcontraseña'];
    $query = "CALL pa_agregar_Usuario('','$nombre', '$apellido', '$contraseña', '$dni', '$correo')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
      die("Fallo al registrar.");
    }

    header('Location: login.html');

}

?>